<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

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
    return view('home.index');
});
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/anasayfa', [HomeController::class, 'index'])->name('index');
Route::get('/iletişim', [HomeController::class, 'contact'])->name('contact');
Route::get('/hakkımızda', [HomeController::class, 'about'])->name('about');
Route::get('/projelerimiz', [HomeController::class, 'projects'])->name('projects');
Route::get('/servislerimiz', [HomeController::class, 'services'])->name('services');