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

Route::get('/', function () {
    return view('home');
});
Route::get('/about/{cat?}', function ($cat = null) {
    return view('about', ['cat' => $cat]);
});
Route::get('/produit',[produitController::class,'index'])->name('walid');


