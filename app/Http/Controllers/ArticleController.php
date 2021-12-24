<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function create(Request $request){

        // Vlidation data
        $request->validate([
            'judul' => ['required'],
            'thumbnail' => ['required', 'mimes:jpg,jpeg,png'],
            'content' => ['required']
        ]);

        // Upload file gambar
        $file = $request->file('thumbnail');
        $extension = $file->getClientOriginalExtension();
        $fileName = strtolower(str_replace(' ', '-', $request->judul)) . '.' . $extension;
        // $path = Storage::putFileAs('public/articles', $file, $fileName);
        // $file->move('/images/articles', $fileName); 

        // Masukkan ke database
        Article::create([
            'title' => $request->judul,
            'image' => $fileName,
            'content' => $request->content,
        ]);

        // Redirect kehalaman admin articles
        return redirect('/admin/articles')->with('status', 'Artikel baru berhasil ditambahkan');
    }
}
