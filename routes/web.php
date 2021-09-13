<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard',[Controllers\TestController::class , 'dashboard'])->middleware(['auth'])->name('dashboard');


Route::resource('Listings', Controllers\ListingsController::class);

Route::get('test',[Controllers\TestController::class , 'index']);

require __DIR__.'/auth.php';
