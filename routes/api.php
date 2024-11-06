<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Image\ImageController;
use App\Http\Controllers\NFT\NFTController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('images', ImageController::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::resource('nfts', NFTController::class)
    ->only(['index', 'store', 'show', 'update', 'destroy']);
