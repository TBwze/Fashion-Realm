<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class CartController extends Controller
{
    //
    public function store(Request $request)
    {
        // $product_id = $request->input('product_id');

        $product = Product::find($request->input('product_id'));

        if ($product) {
            $size = $request->input('sizes');
            // $productSize = ProductSize::where('product_id', $product->id)
            //     ->where('size', $size)
            //     ->first();

            // if ($productSize && $productSize->quantity > 0) {
            // $cart = session()->get('cart');
            // $cart[] = [
            //     'product_id' => $product_id,
            //     'size' => $size,
            //     'quantity' => 1,
            //     'price' => $product->price,
            // ];
            // session()->put('cart', $cart);
            $cartItem = new Cart();
            $cartItem->product_id = $product->id;
            $cartItem->size = $size;
            $cartItem->quantity = 1;
            $cartItem->price = $product->price;
            $cartItem->save();

            return Redirect::route('cart.index')->with('success', 'Product added to cart successfully.');
            // }
        }
        // return redirect()->back()->with('error', 'Product or size not available.');
    }

    public function index()
    {
        // $cart = session('cart');
        // $products = [];
        $cartItems = Cart::with('product')->get();

        // if ($cart && count($cart) > 0) {
        //     foreach ($cart as $index => $item) {
        //         $product = Product::find($item['product_id']);
        //         if ($product) {
        //             $item['name'] = $product->name;
        //             $products[] = $item;
        //         }
        //     }
        // }

        // $products = $cartItems->map(function ($item) {
        //     return [
        //         'product_id' => $item->product->id,
        //         'name' => $item->product->name,
        //         'size' => $item->size,
        //         'quantity' => $item->quantity,
        //     ];
        // });

        return view('cart', compact('cartItems'));
    }

    public function update(Request $request, $id)
    {
        // $cart = session()->get('cart');
        $cartItem = Cart::find($id);

        if ($cartItem) {
            $cartItem->quantity = $request->input('quantity');
            $cartItem->save();
        }

        // if (isset($cart[$index])) {
        //     $cart[$index]['quantity'] = $request->input('quantity');
        //     session()->put('cart', $cart);
        // }

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully.');
    }

    public function destroy($id = null)
    {
        if ($id !== null) {
            // $cart = session()->get('cart');
            // unset($cart[$index]);
            // session()->put('cart', $cart);
            $cartItem = Cart::find($id);

            if ($cartItem) {
                $cartItem->delete();
            }
        } else {
            // session()->forget('cart');
            Cart::truncate();
        }

        return redirect()->route('cart.index')->with('success', 'Item(s) removed from cart.');
    }

    public function checkout()
    {
        $cartItems = Cart::all();
        $totalAmount = 0;

        if ($cartItems->isNotEmpty()) {
            foreach ($cartItems as $item) {
                # code...
                $productSize = DB::table('product_sizes')->where('product_id', '=', $item->product_id)->where('size', '=', $item->size)->first();

                if (!$productSize || (int)$productSize->quantity < $item->quantity) {
                    return redirect()->route('cart.index')->with('error', 'Invalid or insufficient quantity for some items in your cart.');
                }

                $subtotal = $item->quantity * $item->product->price;
                $totalAmount += $subtotal;

                $newQuantity = (int)$productSize->quantity - $item->quantity;

                DB::table('product_sizes')
                    ->where('product_id', '=', $item->product_id)
                    ->where('size', '=', $item->size)
                    ->update(['quantity' => $newQuantity]);

                $transaction = Transaction::create([
                    'user_id' => Auth::id(),
                    'transaction_date' => now(),
                    'total_item' => $totalAmount,
                ]);

                TransactionDetail::create([
                    'transaction_id' => $transaction->id,
                    'product_size_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'size' => $item->size,
                ]);

                Cart::truncate();

                return redirect('/')->with('success', 'Checkout successful!');
            }
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }
    }
}
