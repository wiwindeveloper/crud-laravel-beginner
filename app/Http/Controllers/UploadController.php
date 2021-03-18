<?php

namespace App\Http\Controllers;

use App\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload.index');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,bmp,png,jpeg'
        ]);

        $path = $request->file('image')->store('images', 'public');

        Upload::create([
            'file' => $path
        ]);

        return redirect('/upload')->with('status', 'Gambar berhasil diupload!');

    }
}
