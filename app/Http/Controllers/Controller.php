<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function addUser(Request $request){
        $validated = $request->validate([
            'fname' => 'required'
        ]);

        $userToken = User::create([
            "name" => $request->fname,
            "email" => "example@example.com",
            "password" => "password"
        ]);

        return cache('welcome');
    }
}
