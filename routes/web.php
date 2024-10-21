<?php

use App\Http\Controllers\ContohController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

 route::get('/produk',function (){
     return view('produk');
 });

 Route::get('/contoh', [ContohController::class, 'TampilContoh']);
 Route::get('/produk', [ProdukController::class, 'Viewproduk']);
 Route::get('/produk/add', [ProdukController::class, 'ViewAddproduk']);
 Route::post('/produk/add', [ProdukController::class, 'Createproduk']);
 Route::delete('/produk/delete{kode_produk}', [ProdukController::class, 'Deleteproduk']);
