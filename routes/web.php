<?php

use App\Actions\showHome;
use App\Http\Controllers\ChangeLang;
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

// Route::get('/', function () {
//     // return view('welcome');
//     return view('admin.layouts.master');
// })->name('home');
Route::get('/',showHome::class)->name('home');
Route::get('/language/{lang}', ChangeLang::class)->name('lang_change');
