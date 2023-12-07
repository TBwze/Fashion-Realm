<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\Models\User;

class AuthorizationController extends Controller
{
    //
    public function SignUp(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required | unique:users',
            'password' => 'required | alpha_num',
            'confirmpassword' => 'required | alpha_num',
        ]);

        $confirm = $request->confirmpassword;
        $password = $request->password;
        if ($confirm != $password) {
            return redirect()->back()->withErrors(new messageBag(['Confirm password does not match the password']));
        }

        $data = $request->all();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['password'],
            'password' => bcrypt($data['password']),
            'role' => 'member',
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function SignIn(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
        return back()->withErrors([
            'your username or password is incorrect'
        ]);

        // validate user input
        if (Auth::attempt($credentials)) {
            return redirect('/posthome');
        } else {
            return back()->withErrors([
                'your username or password is incorrect'
            ]);
        }
    }

    public function Logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
