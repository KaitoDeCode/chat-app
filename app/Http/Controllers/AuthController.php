<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    protected function register(Request $request)
    {
        $request->validate([
            "name" => "required|max:40|string",
            "email" => "required|max:50|string|email|unique:users,email",
            "password" => "required|min:8|string",
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);


        return redirect()->route()->with('success',"");
    }
}
