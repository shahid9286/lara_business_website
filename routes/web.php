<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\WhyChooseController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;

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


Route::view('/admin-dashboard', 'admin.dashboard');



Route::view('/blank', 'admin.dashboard');


Route::get('/sliders',[SliderController::class,'index'])->name('admin.index.slider');
Route::get('/add-slider',[SliderController::class,'create'])->name('admin.create.slider');
Route::post('/store-slider',[SliderController::class,'store'])->name('admin.store.slider');
Route::get('/edit-slider/{id}',[SliderController::class,'edit'])->name('admin.edit.slider');
Route::post('/update-slider/{id}',[SliderController::class,'update'])->name('admin.update.slider');
Route::get('/delete-slider/{id}',[SliderController::class,'delete'])->name('admin.delete.slider');


Route::get('/services',[ServiceController::class,'index'])->name('admin.index.service');
Route::get('/add-service',[ServiceController::class,'create'])->name('admin.create.service');
Route::post('/store-service',[ServiceController::class,'store'])->name('admin.store.service');
Route::get('/edit-service/{id}',[ServiceController::class,'edit'])->name('admin.edit.service');
Route::post('/update-service/{id}',[ServiceController::class,'update'])->name('admin.update.service');
Route::get('/delete-service/{id}',[ServiceController::class,'delete'])->name('admin.delete.service');



Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/about-us',[HomeController::class,'about'])->name('site.about');
Route::get('/our-services',[HomeController::class,'services'])->name('site.services');
Route::get('/our-projects',[HomeController::class,'projects'])->name('site.projects');