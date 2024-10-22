<?php

use App\Http\Controllers\pert2controller;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('pert2', function () {
    return view('pert2');
});
*/
Route::get('/pert2', [pert2Controller::class, 'TampilPert2']);
Route::get('/produk', [ProdukController::class, 'ViewProduk']);
