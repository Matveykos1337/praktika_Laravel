<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anketa;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use Intervention\Image\ImageManagerStatic;

class ContactController extends Controller
{
    public function submit(Request $req){
         
        $contact = new Anketa();
        $contact->user_id = Auth::id();
        $contact->adress = $req->input('adress');
        $contact->opisanie = $req->input('opisanie');
        $contact->kategory = $req->kategory;
        $contact->maxcost = $req->input('maxcost');
        $contact->img = $this->imgstore($req);
        $contact->save();
 
        return redirect()->route('user-show')->with('success', 'Сообщение было добавлено');
    }

    public function showByUser() {
        $contact = new Anketa;
        $data = [];
        $user_id = Auth::user()->id;
        $data = $contact->where('user_id', '=', $user_id)->get();

        return view('user', ['data' => $data ]);
    }

    public function imgstore($req){
        $fileContent = $req->file('img');
        $ext = $fileContent->extension();
        $filename = Str::random(40) . '.' . $ext;
        $img = ImageManagerStatic::make($fileContent)->encode($ext)->resize(300, 300);
        Storage::disk('public')->put($filename, $img);
        return $filename;
    }

    public function deleteMessage($id) {
        Anketa::find($id)->delete();
        return redirect()->route('user-show')->with('success', 'Сообщение было удалено');
    }

}
