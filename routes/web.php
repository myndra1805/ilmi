<?php

use App\Models\Article;
use App\Models\Tausiah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');
Route::prefix('/al-quran')->group(function(){
    Route::get('/', 'PagesController@alquran');
    Route::get('/surah/{id}', 'PagesController@surah');
});
Route::prefix('/iqra')->group(function(){
    Route::get('/', 'PagesController@iqra');
    Route::get('/{id}', 'PagesController@detail_iqra');
});
Route::get('/articles', 'PagesController@articles');
Route::get('/article/{id}', 'PagesController@article');
Route::get('/tausiah', 'PagesController@tausiah');
Route::get('/tausiah/{id}', 'PagesController@detail_tausiah');
// Route::get('/donate', 'PagesController@donate');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/tausiah', 'AdminController@tausiah');
Route::get('/admin/articles', 'AdminController@articles');

Route::prefix('/articles')->group(function(){
    Route::post('/create', 'ArticleController@create');
});

Route::prefix('/tausiah')->group(function(){
    Route::post('/create', 'TausiahController@create');
});

Route::get('/update', function(){
    Tausiah::truncate();
    $images = [
        'https://drive.google.com/file/d/1u3C-Z10gmIkZ918eSsgX7BkO3-bnPi25/view?usp=sharing',
        'https://drive.google.com/file/d/162kvRJLdkG0sZuq7LdtHyC5pXIhUax86/view?usp=sharing',
        'https://drive.google.com/file/d/1o1PSqj7_wa1ludqyJHDc6C0jcZjQZ0jK/view?usp=sharing',
        'https://drive.google.com/file/d/1tDqBTvoOjeAgMWL2VoEIFQ7MgJeHh2UL/view?usp=sharing',
        'https://drive.google.com/file/d/1_uGdZLnFDRmZ8o5MYy8nMMZde6paloCN/view?usp=sharing',
        'https://drive.google.com/file/d/1RMYWa3wvyV1qpFeEfnSRgvQoHQqgCC9A/view?usp=sharing'
    ];

    $titles = [
        'jangan-cemaskan-masa-depanmu-sedangkan-kau-adalah-hamba-dari-yang-maha-kaya-dan-maha-pemberi-rezeki',
        'ketika-ruh-berpisah-dengan-jasad',
        'penyesalan-sang-mayat-di-alam-kubur',
        'perbaiki-dirimu-mulai-dari-perbaiki-sholat',
        'perbaikilah-sholatmu-allah-akan-perbaiki-hidupmu',
        'tawasul-dengan-bersholawat'
    ];

    $ustadz = [
        'Ustadz Khalid Basalamah',
        'Ustadz Abdul Somad',
        'Ustadz Abdul Somad',
        'Ustadz Abdul Somad',
        'Ustadz Adi Hidayat',
        'Ustadz Adi Hidayat',
    ];

    for($i = 0; $i < 6; $i++){
        Tausiah::create([
            'title' => ucwords(str_replace('-', ' ', $titles[$i])),
            'image' => $images[$i] . '.png',
            'video' => 'video.mp4',
            'ustad' => $ustadz[$i] 
        ]);
    }
});