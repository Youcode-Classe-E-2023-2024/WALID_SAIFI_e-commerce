<?php

use App\Http\Controllers\produitController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login', function () {
    return view('login');
});
Route::get('/sinup', function () {
    return view('sinup');
});

Route::get('/produit',[produitController::class,'index'])->name('produit.index');
Route::get('/produit/create',[produitController::class,'create'])->name('produit.create');
Route::post('/produit',[produitController::class,'store'])->name('produit.store');
Route::get('/produit/{produit}/edit',[produitController::class,'edit'])->name('produit.edit');
Route::put('/produit/{produit}/update',[produitController::class,'update'])->name('produit.update');
Route::delete('/produit/{produit}/destroy',[produitController::class,'destroy'])->name('produit.destroy');
Route::get('/produit/{produit}/voir',[produitController::class,'voir'])->name('produit.voir');

