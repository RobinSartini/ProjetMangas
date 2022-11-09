<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MangaController;
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

Route::get('/', function () {
    return view('pageMenu');
});

Route::get('/pageMenu', function () {
    return view('pageMenu');
});

Route::get('/listerMangas', 'App\Http\Controllers\MangaController@listerMangas');

Route::get('/ajouterManga','App\Http\Controllers\MangaController@ajoutManga');

Route::post('/ajoutManga',
[
    'as'=>'ajoutManga',
    'uses'=>'App\Http\Controllers\MangaController@postAjouterManga'
]);

Route::get('/modifierManga/{id}', 'App\Http\Controllers\MangaController@modification');

Route::post('/postModifierManga/{id}',
[
    'as'=>'/postModifierManga',
    'uses'=>'App\Http\Controllers\MangaController@postModifierManga'
    ]);

Route::get('/listerMangasGenre', 'App\Http\Controllers\MangaController@listerGenre');

Route::post('/postAfficheManga',
[
    'as'=>'postAfficheManga',
    'uses'=>'App\Http\Controllers\MangaController@listerMangasGenre'
]);
