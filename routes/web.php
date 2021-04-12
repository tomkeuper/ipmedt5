<?php

use App\Http\Controllers\HuisController;
use App\Http\Controllers\KnopController;
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
});

Route::get('/knop', [KnopController::class, 'aanuit']);
Route::get('/knop/{id}', [KnopController::class, 'aanuit']);
Route::get('/knop/{id}/{boolean}', [KnopController::class, 'aanuit']);

Route::get('/dashboard', [HuisController::class, 'index'])
                ->middleware(['auth'])
                ->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/huizen', [HuisController::class, 'index']);
Route::get('/huizen/{id}', [HuisController::class, 'show']);