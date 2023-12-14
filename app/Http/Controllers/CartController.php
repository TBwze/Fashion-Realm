<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSize;
use Illuminate\Support\Facades\Redirect;

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
                // Fetch product details and add them to the products array
                // Assuming you retrieve product details and add them to $products
                $product = Product::find($item['product_id']);
                if ($product) {
                    $item['name'] = $product->name; // Add the product name to the cart item
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
            session()->forget('cart'); // This will clear the entire cart
        }

        return redirect()->route('cart.index')->with('success', 'Item(s) removed from cart.');
    }
}
