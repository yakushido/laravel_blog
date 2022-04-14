<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::get('/',[ArticleController::class,'index'])->name('blog.index');
Route::post('/create',[ArticleController::class,'create'])->name('blog.create');
Route::get('/manage',[ArticleController::class,'manage'])->name('blog.management');
Route::get('/manage/update/{id}',[ArticleController::class,'edit'])->name('blog.edit');
Route::post('/manage/update/{id}', [ArticleController::class, 'update'])->name('blog.update-post');
