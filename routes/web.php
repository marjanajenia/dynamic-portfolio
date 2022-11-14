<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AboutController;

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

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('frontend.mastertemplate.template');
})->name('index');

Route::get('/blank', function () {
    return view('backend.blank');
});
Route::group(['prefix'=> 'about'], function(){
    Route::get('/create', [AboutController::class, 'create'])->name('about');
    Route::post('/update', [AboutController::class, 'update'])->name('aboutupdate');
});

