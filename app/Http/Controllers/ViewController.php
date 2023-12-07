<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
