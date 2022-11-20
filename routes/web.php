<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Frontend\ContactController;

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
Route::group(['prefix' => 'contact'], function(){
    Route::post('/', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/manage',[ContactController::class, 'index'])->name('contact.manage');
});
Route::group(['prefix' => 'award'], function(){

});
Route::get('/add', function(){
    return view('backend.pages.award.addaward');
})->name('add');
