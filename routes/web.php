<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class, 'index'])->middleware('auth');

/**
 * Register, Login, dan Logout
 */
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register/action', [RegisterController::class, 'registerAction'])->name('registerAction');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/action', [LoginController::class, 'loginAction'])->name('loginAction');

Route::get('/logout', [LoginController::class, 'logoutAction'])->name('logout');
/**
 * End of Register, Login, dan Logout
 */

Route::get('/addtask', [TaskController::class, 'addTask'])->name('addTask')->middleware('auth');
Route::post('/addtask/action', [TaskController::class, 'addTaskAction'])->name('addTaskAction')->middleware('auth');

Route::get('/update/{id}', [TaskController::class, 'update'])->middleware('auth');
Route::put('/update/action/{id}', [TaskController::class, 'updateAction'])->middleware('auth');

Route::get('/finish', [TaskController::class, 'done'])->middleware('auth');
Route::get('/finish/{id}', [TaskController::class, 'doneAction'])->middleware('auth');
Route::get('/finish/delete/{id}', [TaskController::class, 'deleteDone'])->middleware('auth');

Route::get('/delete/{id}', [TaskController::class, 'delete'])->middleware('auth');



