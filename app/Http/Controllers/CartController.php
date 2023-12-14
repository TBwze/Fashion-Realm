<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\Transaction;
use App\Models\TransactionDetail;

class CartController extends Controller
{
    //
    public function store(Request $request)
    {
        $product_id = $request->input('product_id');
        $size = $request->input('sizes');

        $product = Product::find($product_id);

        if ($product) {
            $productSize = ProductSize::where('product_id', $product_id)
                ->where('size', $size)
                ->first();

            if ($productSize && $productSize->quantity > 0) {

                $cart = session()->get('cart');
                $cart[] = [
                    'product_id' => $product_id,
                    'size' => $size,
                    'quantity' => 1,
                    'price' => $product->price,
                ];
                session()->put('cart', $cart);

                return Redirect::route('cart.index')->with('success', 'Product added to cart successfully.');
            }
        }

        return redirect()->back()->with('error', 'Product or size not available.');
    }

    public function index()
    {
        $cart = session('cart');
        $products = [];

        if ($cart && count($cart) > 0) {
            foreach ($cart as $index => $item) {
                $product = Product::find($item['product_id']);
                if ($product) {
                    $item['name'] = $product->name;
                    $products[] = $item;
                }
            }
        }

        return view('cart', compact('products'));
    }

    public function update(Request $request, $index)
    {
        $cart = session()->get('cart');

        if (isset($cart[$index])) {
            $cart[$index]['quantity'] = $request->input('quantity');
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully.');
    }

    public function destroy($index = null)
    {
        if ($index !== null) {
            $cart = session()->get('cart');
            unset($cart[$index]);
            session()->put('cart', $cart);
        } else {
            session()->forget('cart');
        }

        return redirect()->route('cart.index')->with('success', 'Item(s) removed from cart.');
    }

    public function checkout()
    {
        $cart = session('cart');
        $totalAmount = 0;

        if (is_array($cart) && count($cart) > 0) {
            foreach ($cart as $item) {
                if (!is_array($item) || !isset($item['product_id'], $item['size'], $item['quantity'], $item['price'])) {
                    // Handle malformed cart item - it should have necessary keys
                    return redirect()->route('cart.index')->with('error', 'Malformed item in the cart.');
                }

                $subtotal = $item['quantity'] * $item['price'];
                $totalAmount += $subtotal;

                // Retrieve the product size
                $productSize = ProductSize::where('product_id', $item['product_id'])
                    ->where('size', $item['size'])
                    ->first();


                $itemQuantity = is_array($item['quantity']) ? (int)$item['quantity']['quantity'] : (int)$item['quantity'];

                if ($productSize && is_numeric($productSize->quantity) && isset($item['quantity']) && is_numeric($item['quantity'])) {
                    $itemQuantity = (int)$item['quantity'];

                    if ($itemQuantity >= 0 && $productSize->quantity >= (int)$itemQuantity) {
                        $newQuantity = $productSize->quantity - $itemQuantity;
                        $productSize->update(['quantity' => $newQuantity]);

                        $transaction = Transaction::create([
                            'user_id' => Auth::id(),
                            'transaction_date' => now(),
                            'total_item' => $totalAmount,
                        ]);

                        TransactionDetail::create([
                            'transaction_id' => $transaction->id,
                            'product_size_id' => $item['product_id'],
                            'quantity' => $itemQuantity,
                            'size' => $item['size'],
                        ]);
                    } else {
                        return redirect()->route('cart.index')->with('error', 'Invalid or insufficient quantity for some items in your cart.');
                    }
                } else {
                    return redirect()->route('cart.index')->with('error', 'Invalid quantity information for some items in your cart.');
                }
            }

            // Clear the cart
            session()->forget('cart');

            return redirect('/')->with('success', 'Checkout successful!');
        }

        return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
    }
}
