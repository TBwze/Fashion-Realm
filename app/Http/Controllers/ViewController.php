<?php

namespace App\Http\Controllers;

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

    public function showCatalog()
    {
        // if (Auth::check()) {
        return redirect('/product');
        // } else {
        //     return redirect('/signin');
        // }
    }

    public function showDetail()
    {
        return view('detail', [
            'title' => 'Fashion Realm | Detauk',
        ]);
    }
}
