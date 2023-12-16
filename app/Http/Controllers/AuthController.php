<?php

namespace App\Http\Controllers;

use App\Models\AlbumContact;
use App\Models\Contact;
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
            "notelp" => "required|min:11|unique:contacts,noTelp"
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password= Hash::make($request->password);
        $user->save();

        $album = new AlbumContact();
        $album->user_id = $user->id;
        $album->save();

        Contact::create([
            "user_id" => $user->id,
            "noTelp" => "+62 ".$request->notelp,
        ]);

        toastr()->success("Berhasil register");
        return redirect()->route('signIn.page');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // dd($request);

    $credentials = $request->only('email', 'password');

    if (!Auth::attempt($credentials)) {
        toastr()->error("Gagal Login");
        return back();
    }

    $user = User::where('email',$request->email)->first();

        if(Hash::check($user->password,Hash::make($request->password))){
            toastr()->error("Password Salah");
            return back();
        }

    return redirect()->route('page.dashboard');

}
}
