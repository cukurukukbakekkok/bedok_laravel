<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function (){
    return view('about', [
        'nama' => 'bedok',
        'umur' => '25',
        'alamat' => 'japan'
    ]);
});


Route::view('/contact','pages.contact');    

//satu controller banyak method
Route::get('/product', [ProdukController::class, 'getProduk']);
Route::get('/product/tambah', [ProdukController::class, 'tambahProduk']);