<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\AwardController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\ExperienceController;

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
    Route::get('/delete/{id}',[ContactController::class, 'destroy'])->name('contact.delete');
});
Route::group(['prefix' => 'award'], function(){
    Route::get('/create', [AwardController::class, 'create'])->name('award.create');
    Route::post('/add', [AwardController::class, 'store'])->name('award.add');
    Route::get('/manage', [AwardController::class, 'index'])->name('award.manage');
    Route::get('/edit/{id}', [AwardController::class, 'edit'])->name('award.edit');
    Route::post('/update/{id}', [AwardController::class, 'update'])->name('award.update');
});
Route::group(['prefix' => 'education'], Function(){
    Route::get('/create', [EducationController::class, 'create'])->name('education.create');
    Route::post('/add', [EducationController::class, 'store'])->name('education.add');
    Route::get('/manage', [EducationController::class, 'index'])->name('education.manage');
    Route::get('/edit/{id}', [EducationController::class, 'edit'])->name('education.edit');
    Route::post('/update/{id}', [EducationController::class, 'update'])->name('education.update');
});
Route::group(['prefix' => 'experience'], function(){
    Route::get('/create', [ExperienceController::class, 'create'])->name('experience.create');
    Route::post('/add', [ExperienceController::class, 'store'])->name('experience.add');
    Route::get('/manage', [ExperienceController::class, 'index'])->name('experience.manage');
    Route::get('/edit/{id}', [ExperienceController::class, 'edit'])->name('experience.edit');
    Route::post('/update/{id}', [ExperienceController::class, 'update'])->name('experience.update');
});


