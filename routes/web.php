<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserManagerController;
use App\Http\Controllers\CommentManagerController;
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

Route::get('/', function () {
    if (Auth::check()) {
        return view('home');
    }
    
})->middleware('auth');

Route::get('/users', [UserManagerController::class,
'display_users'])->middleware('auth');

Route::get('/users/view/{id}', [UserManagerController::class,
'display_user'])->middleware('auth');

Route::get('/users/view/{id}/add_comment', [CommentManagerController::class,
'display_add_comment_form'])->middleware('auth');

Route::get('/users/add', [UserManagerController::class,
'display_add_user_form'])->middleware('auth');

Route::get('/users/edit/{id}', [UserManagerController::class,
'display_edit_user_form'])->middleware('auth');

Route::get('/users/edit/{id}/edit_password', [UserManagerController::class,
'display_edit_password_form'])->middleware('auth');

Route::post('/users/add', [UserManagerController::class,
'add_user'])->middleware('auth');

Route::post('/users/edit/{id}', [UserManagerController::class,
'update_user'])->middleware('auth');

Route::post('/users/edit/{id}/edit_password', [UserManagerController::class,
'update_password'])->middleware('auth');

Route::get('/users/delete/{id}', [UserManagerController::class,
'delete_user'])->middleware('auth');

Route::post('/users/view/{id}/add_comment', [CommentManagerController::class,
'add_comment'])->middleware('auth');

require __DIR__.'/auth.php';
