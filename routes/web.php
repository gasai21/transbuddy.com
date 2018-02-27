<?php

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
    return view('home');
});

//untuk membuka login tourist
Route::get('/logintourist', function () {
    return view('logintourist');
});

//untuk membuka home tourist
Route::get('/hometourist', function () {
    return view('hometourist');
});

//untuk membuka search tourist
Route::get('/searchtourist', function () {
    return view('searchtourist');
});

//untuk membuka result search tourist
Route::get('/resultsearchtourist', function () {
    return view('resultsearchtourist');
});

//untuk membuka login translate
Route::get('/logintranslater', function () {
    return view('logintranslater');
});

//untuk membuka sign up translate
Route::get('/signuptranslater', function () {
    return view('signuptranslater');
});

//untuk membuka home translate
Route::get('/hometranslater', function () {
    return view('hometranslater');
});

//untuk membuka pesanan translater
Route::get('/pesanantranslater', function () {
    return view('pesanantranslater');
});

//untuk membuka Chatta translater
Route::get('/chattantranslater', function () {
    return view('chattantranslater');
});

//untuk membuka detail pesanan translater
Route::get('/detailpesanantranslater', function () {
    return view('detailpesanantranslater');
});