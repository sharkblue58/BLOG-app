<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

Route::controller(PostController::class)->group(function(){

    Route::get('/posts','index')->name('posts.index');
    Route::get('/posts/create','create')->name('posts.create');
    Route::get('/posts/edit/{id}','edit')->name('posts.edit');
    Route::get('/posts/show/{id}','show')->name('posts.show');
    Route::get('/posts/softDele','softDele')->name('posts.softDele');
    Route::get('/posts/restore/{id}','restore')->name('post.restore');
    Route::get('/posts/remove/{id}','remove')->name('post.remove');
    Route::post('/posts/destroy/{id}','destroy')->name('posts.destroy');
    Route::post('/posts/store','store')->name('posts.store');
    Route::post('/posts/update/{id}','update')->name('posts.update');
    
});


    Route::post('/comments/{id}',[CommentController::class,'store'])->name('comment.store'); 
    Route::post('/comments/index/{id}',[CommentController::class,'index'])->name('comment.index');
