<?php

use App\Http\Controllers\CentrePointController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SpaceController;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [PageController::class, 'register_page'])->name('register.pages');

Route::resource('space', SpaceController::class);
Route::resource('CentrePoint', CentrePointController::class);
