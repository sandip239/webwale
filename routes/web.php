<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\blogController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.index');
});

//admin login
Route::match(['get', 'post'], 'admin-auth', [AuthController::class, 'adminAuth'])->name('admin-auth');


Route::middleware(['admin'])->group(function () {
});
//Dashboard
Route::get('admin-index',[admincontroller::class,'index'])->name('admin-index');
Route::get('get-newpost',[admincontroller::class,'getBlogPosts'])->name('get-newpost');

//blog section
Route::match(['get', 'post'], 'blog-create', [blogController::class, 'blogEditor'])->name('blog-create');
Route::get('blog-edit/{id}',[blogController::class,'blogEdit'])->name(']blog-edit');


// user blog view
Route::get('blog-list-view',[UserController::class,'BlogView'])->name('blog-listView');
Route::get('page-view/{id}',[UserController::class,'index'])->name('pageview');

