<?php

use App\Http\Livewire\Admin;
use App\Http\Livewire\Index;
use App\Http\Livewire\Invitation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
//     return view('index');
// });

// Route::get('/admin', function () {
//     return view('welcome');
// })->name('admin')->middleware('auth');
Route::get('/admin', Admin::class)->name('admin')->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login-attempt', [AuthController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/{code}', Invitation::class)->name('invitation');
Route::get('/', Index::class)->name('index');