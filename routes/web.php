<?php

use App\Http\Controllers\HaloService;
use App\Http\Controllers\ProcessService;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return redirect('/process');
});
Route::get('/process', [ProcessService::class, 'start'])->name('process');

Route::get('/halo', [HaloService::class, 'halo']);
