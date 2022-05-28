<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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
    return view('welcome');
});

Route::resource('tasks','App\Http\Controllers\TasksController');
Route::resource("/task", TasksController::class);


Route::post('/register-user',[TasksController::class, 'registerUser'])->name('register-user');
Route::post('/login-user',[TasksController::class, 'loginUser'])->name('login-user');
Route::get('/logout',[TasksController::class, 'logout'])->name('logout');
Route::get('/registration',[TasksController::class, 'registration']);
Route::get('/login',[TasksController::class, 'login']);
Route::get('/index',[TasksController::class, 'index'])->middleware('auth');
