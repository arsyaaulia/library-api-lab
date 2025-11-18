<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\BookController;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// buat endpoint crud members dan books
Route::apiResource('members', MemberController::class);
Route::apiResource('books', BookController::class);