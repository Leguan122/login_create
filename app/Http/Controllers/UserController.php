<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function getProfile(){
        $user = Auth::user();

        return view('profile',['user' => $user]);
    }

    public function login(Request $request){
        $validated = $request->validate([
            'email' => ['required' , 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->intended('profile');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
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
