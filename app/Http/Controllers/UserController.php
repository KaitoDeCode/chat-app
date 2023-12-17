<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    protected function edit(Request $request)
    {

        $request->validate([
            "name" => "string|max:60",
            "email" => "string|email|max:60",
            "noTelp" => "string|min:11|max:13"
        ]);

        $user = User::where('email',$request->email)->first();


        if($user == null){
            toastr()->error("Kamu tidak boleh mengubah email");
            return back();
        }

        $user->name = $request->name;
        if($user->fotoProfile === null){
            if ($request->fotoProfile) {
                $image = "profile/" . time() . '.' . $request->fotoProfile->extension();
                $request->fotoProfile->storeAs($image);
                $user->fotoProfil = $image;
            }
        }else{
            if ($request->fotoProfile) {
                Storage::delete($user->fotoProfile);
                $image = "profile" . time() . '.' . $request->fotoProfile->extension();
                $request->fotoProfile->storeAs($image);
                $user->fotoProfil = $image;

            }
        }

        if($request->noTelp){
            $contact = Contact::where('user_id',$user->id)->first();
            $contact->noTelp = "+62 ".$request->noTelp;
            $contact->save();
        }

        $user->save();
        // dd($user);
        toastr()->success("Berhasil Mengubah Profile");
        return redirect()->back();
    }
}
