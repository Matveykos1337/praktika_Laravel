<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Anketa;

use Intervention\Image\ImageManagerStatic;

class AdminController extends Controller
{
    public function open() {
        $this->authorize('admin');
        return view('admin');
    }
    
    public function showAll() {
        return view('admin', ['data' => Anketa::all()]);
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
        return redirect()->route('admin')->with('success', 'Сообщение было удалено');
    }
}
