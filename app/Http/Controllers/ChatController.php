<?php

namespace App\Http\Controllers;

use App\Models\AlbumsToContacts;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    protected function getChat($id_penerima){
    $chat = Chat::with(['pengirim','penerima'])->where(function ($query) use ($id_penerima) {
            $query->where('id_pengirim', auth()->user()->id)
                  ->where('id_penerima', $id_penerima);
        })->orWhere(function ($query) use ($id_penerima) {
            $query->where('id_pengirim', $id_penerima)
                  ->where('id_penerima', auth()->user()->id);
        })->orderBy('created_at', 'asc')->get();

        // dd($chat);
        return response()->json($chat);
    }

    protected function sendMessage(Request $request){

        // dd($request);
        $userTerdaftar = User::find($request->penerima_id);
        $cek = AlbumsToContacts::where('album_id',$userTerdaftar->albumContact->id)->where('contact_id',Auth::user()->noTelp->id)->first();
        if($cek == null){
           AlbumsToContacts::create([
            "album_id" => $userTerdaftar->albumContact->id,
            "contact_id" => Auth::user()->noTelp->id,
           ]);
        }

        if($request->id == 0){
            $request->validate([
                "message" => "required|string",
                "penerima_id" => "required|string"
            ]);

            $chat = new Chat;
            $chat->id_penerima = $request->penerima_id;
            $chat->id_pengirim = auth()->user()->id;
            $chat->message = $request->message;
            $chat->save();

            return response()->json(["message"=>"Berhasil mengirim chat"]);
        }else{

            $request->validate([
                "message" => "string",
                "penerima_id" => "required|string",
            ]);

            // dd($request);
            $chat = Chat::find($request->id);
            $chat->fill([
                "message" => $request->message,
            ]);
            $chat->save();

            return response()->json(["message"=>"Berhasil mengedit pesan"]);

        }

    }

    protected function editMessage(Request $request)
    {

    }
}
