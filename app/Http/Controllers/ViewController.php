<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function showHome()
    {
        return view('home', [
            'title' => 'Fashion Realm | Home'
        ]);
    }

    public function showSignIn()
    {
        return view('signin', [
            'title' => 'Fashion Realm | Sign In',
        ]);
    }

    public function showSignUp()
    {
        return view('signup', [
            'title' => 'Fashion Realm | Sign Up',
        ]);
    }

    public function showManageProduct(){
        if(Auth::check() == true && Auth::user()->role == 'admin'){
            return view('manage-product',[
                'title' => 'Fashion Realm | Manage Course',
            ])->with('products', Product::all());
        }
        return redirect('');
    }
}
