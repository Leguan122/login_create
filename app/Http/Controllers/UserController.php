<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        $validated = $request->validate([
            'email' => ['required' , 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->intended('register');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function register(Request $request){

        $validated = $request->validate([
            'email' => 'required' , 'email',
            'password' => 'required',
            'confirm-password' => 'required'
        ]);

        $userToken = User::create([
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        return redirect('welcome');
    }
}
