<?php

use App\Http\Controllers\ExcelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("index");

Route::get('/add',function(){
    return view('add');
})->name("add");

Route::post('/store', [UserController::class, 'store'])->name("store");
Route::get('/show', [UserController::class, 'show'])->name("show");
Route::get('/export', [UserController::class, 'export'])->name("export");

// Route::controller(ExcelController::class)->group(function () {
//    Route::get("/","index")->name("index"); 
//    Route::get("/add","add")->name("add"); 
//    Route::post("/store","store")->name("store"); 
//    Route::get("/show","show")->name("show"); 
// });
