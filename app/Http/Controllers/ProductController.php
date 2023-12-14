<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(string $category)
    {
        $products=Product::where('category',$category)->get();
        return view('catalog', compact(['products','category']));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::check() == true && Auth::user()->role == 'admin'){
            return view('add-product');
        }
        return redirect('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'image_front' => 'required|image|mimes:jpeg,png,jpg',
            'price' => 'required',
            'category' => 'required',
        ]);

        $productName = $request->name;
        $productDescription = $request->description;
        $productImage = $request->file('image_front');
        $productPrice = $request->price;
        $productCategory = $request->category;

        DB::table('products')->insert([
            'name' => $productName,
            'description' =>$productDescription,
            'image_front' => "img/" . $productImage->getClientOriginalName(),
            'price' => $productPrice,
            'category' => $productCategory,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product=Product::find($product->id);
        return view('detail')->with('product',$product);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        if(Auth::check() == true && Auth::user()->role == 'admin'){
            return view('edit')->with('product', Product::find($id));
        }
        return redirect('');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'image_front' => 'image|mimes:jpeg,png,jpg',
            'price' => 'required',
            'category' => 'required',
        ]);
        $productName = $request->name;
        $productDescription = $request->description;
        $productImageFront = $request->file('image_front');
        $productPrice = $request->price;
        $productCategory = $request->category;
        $product = Product::find($id);
        if($productImageFront == null){
            $productImageFront = $product->image_front;
        }else{
            $productImageFront=$productImageFront->getClientOriginalName();
        }

        DB::table('products')->where('id', $product->id)->update([
            'name' => $productName,
            'description' => $productDescription,
            'image_front' => 'img/' . $productImageFront,
            'image_back' => NULL,
            'price' => $productPrice,
            'category' =>$productCategory,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect()->back();
    }
}
