<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tausiah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PagesController extends Controller
{
    public function index()
    {
        $listTausiah =  Tausiah::take(9)->get();
        $articles = Article::take(3)->get();
        return view('index', [
            'articles' => $articles,
            'listTausiah' => $listTausiah
        ]);
    }

    public function alquran()
    {
        $response = Http::get('https://api.npoint.io/99c279bb173a6e28359c/data');
        return view('alquran', [
            "list_surah" => json_decode($response->body())
        ]);
    }

    public function tausiah()
    {
        $listTausiah =  Tausiah::take(12)->get();
        return view('tausiah', [
            'listTausiah' => $listTausiah
        ]);
    }

    public function donate()
    {
        return view('donate');
    }

    public function articles()
    {
        $articles = Article::take(12)->get();
        return view('articles', [
            'articles' => $articles
        ]);
    }

    public function surah($id)
    {
        $response = Http::get("https://api.alquran.cloud/v1/surah/$id/editions/quran-simple,id.indonesian");
        $tafsir = Http::get("https://equran.id/api/tafsir/$id");
        return view('surah', [
            "surah" => json_decode($response->body())->data,
            "id" => $id,
            "tafsir" => json_decode($tafsir->body()),
        ]);
    }

    public function article($id)
    {
        $articles = Article::where("id", "<>", $id)->take(12)->get();
        $article = Article::where("id", $id)->get();
        return view('article', [
            'article' => $article[0],
            'articles' => $articles
        ]);
    }

    public function detail_tausiah($id)
    {
        $listTausiah =  Tausiah::where("id", "<>", $id)->take(5)->get();
        $tausiah = Tausiah::where("id", $id)->get();
        return view('detail_tausiah', [
            'listTausiah' => $listTausiah,
            'tausiah' => $tausiah[0]
        ]);
    }

    public function iqra()
    {
        $images = ['iqra1.png', 'iqra2.jpg', 'iqra3.jpg', 'iqra4.jpg', 'iqra5.jpg', 'iqra6.jpg'];
        return view('iqra', [
            'images' => $images
        ]);
    }

    public function detail_iqra($id){
        $list_halaman = [32, 31, 31, 31, 31, 31];
        return view('detail_iqra', [
            'id' => $id,
            'pages' => $list_halaman[$id - 1]
        ]);
    }
}
