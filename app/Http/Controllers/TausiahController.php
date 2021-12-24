<?php

namespace App\Http\Controllers;

use App\Models\Tausiah;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TausiahController extends Controller
{
    public function create(Request $request){
        // Validasi input
        $request->validate([
            'judul' => ['required'],
            'thumbnail' => ['required', 'mimes:jpg,jpeg,png'],
            'penceramah' => ['required'],
            'video' => ['required', 'mimes:mp4,mkv']
        ]);

        // Upload thumbnail video ke storage
        $fileThumbnail = $request->file('thumbnail');
        $extensionThumbnail = $fileThumbnail->getClientOriginalExtension();
        $fileNameThumbnail = strtolower(str_replace(' ', '-', $request->judul)) . '-' . Str::random(32) . '.' . $extensionThumbnail;
        $pathThumbnail = Storage::putFileAs('public/tausiah/thumbnail', $fileThumbnail, $fileNameThumbnail);

        // Upload video ke storage
        $fileVideo = $request->file('video');
        $extensionVideo = $fileVideo->getClientOriginalExtension();
        $fileNameVideo = strtolower(str_replace(' ', '-', $request->judul)) . '-' . Str::random(32) . '.' . $extensionVideo;
        $pathVideo = Storage::putFileAs('public/tausiah/video', $fileVideo, $fileNameVideo);

        // Masukkan ke tabel tausiah
        Tausiah::create([
            'title' => $request->judul,
            'image' => $pathThumbnail,
            'ustad' => $request->penceramah,
            'video' => $pathVideo
        ]);

        // Rediret kehalaman admin tausiah
        return redirect('/admin/tausiah')->with('status', 'Video baru berhasil ditambahkan');
    }
}
