<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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
})->name('home');

Route::get('/init', [MainController::class, 'init'])
        ->name('init');

Route::get('/get_status', [MainController::class, 'get_status'])
        ->name('get_status');
        
Route::get('/activate', [MainController::class, 'activate'])
    ->name('activate');

Route::get('/deactivate', [MainController::class, 'deactivate'])
        ->name('deactivate');