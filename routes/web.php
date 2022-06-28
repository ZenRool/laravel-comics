<?php

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

Route::get('/', function () {
    $comic_array = config("comics");
    $data = [
        "comic_array" => $comic_array,
    ];
    return view('home', $data);
})->name('home');

Route::get("single-comic/{id}", function ($id) {
    $comic = config("comics");
    if(count($comic) <= $id ) {
        return abort(404);
    }
    $data = [
        "comic" => $comic[$id],
    ];
    return view("single", $data);
})->name('single');


