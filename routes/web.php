<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');

// Route::get('/{slug}', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/submit-post', [App\Http\Controllers\PostController::class, 'createPost'])->name('createPost');
Route::get('/post-detail/{slug}/{id}', [App\Http\Controllers\PostController::class, 'postDetail'])->name('postDetail');
Route::post('/submit-testimonial', [App\Http\Controllers\PostController::class, 'submitTestimonial'])->name('submitTestimonial');
