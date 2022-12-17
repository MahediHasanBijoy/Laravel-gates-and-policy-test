<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\PostController;

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


// home controller routes after login
Route::get('/', [HomeController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// admin routes
Route::middleware(['auth:sanctum', 'is_admin'])->prefix('admin')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'index']);
});

// route gate for admin
// Route::get('admingate', [AuthorizationController::class, 'index'])->name('gate.index')->middleware('can:isAdmin');


// route for controller gate
Route::get('admingate', [AuthorizationController::class, 'index']);


// posts route
Route::get('posts', [PostController::class, 'index'])->middleware('auth')->name('posts.index');
Route::get('posts/{post}', [PostController::class, 'show'])->middleware('auth')->name('post.show');
Route::get('posts/delete/{post}', [PostController::class, 'destroy'])->middleware('auth')->name('post.destroy');