<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\AlbumContact;
use App\Models\AlbumsToContacts;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    protected function addContact(Request $request)
    {
        $request->validate([
            "notelp" => "required|string|min:10|max:13"
        ]);

        $noTelp = "+62 ".$request->notelp;
        $contact = Contact::where('noTelp',$noTelp)->first();
        // dd($contact);
        if($contact == null){
            toastr()->error("Nomor Telp tidak ditemukan");
            return back();
        }

        $user = User::findOrFail(Auth::user()->id);

        if($contact->user_id == $user->id){
            toastr()->error("Nomor Telpmu sendiri tidak bisa kamu masukan ke album");
            return back();
        }

        AlbumsToContacts::create([
            "album_id" => $user->albumContact->id,
            "contact_id" => $contact->id,
        ]);

        toastr()->success("berhasil menambahkan nomor ke album");
        return redirect()->back();
    }

    protected function index()
    {
        $album = User::findOrFail(Auth::user()->id)->albumContact;
        $contacts = $album->contacts;
        // dd($contacts);
        return view('list-contact',compact('contacts'));
    }

    protected function show($id)
    {
        $user = User::with('noTelp')->findOrFail($id);
        return response()->json($user);
    }

    protected function deleteContact($user_id)
    {
        $album_id = auth()->user()->albumContact->id;
        $contact_id = User::findOrFail($user_id)->noTelp->id;
        AlbumsToContacts::where("album_id",$album_id)->where("contact_id",$contact_id)->delete();

        return response()->json(["success"=>"Success delete contact"]);
    }



}
