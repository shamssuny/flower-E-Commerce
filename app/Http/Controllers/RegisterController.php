<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //show register page
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $this->validate(request(),[
            'username' => 'required|unique:users|alpha_dash',
            'email' => 'email|unique:users',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required|confirmed|min:8'
        ]);
        User::create([
           'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'phone' => request('phone'),
            'address' => request('address')
        ]);

        return redirect('/login')->with('LoginSuccess','Register Success. Login to continue.');
    }
}
