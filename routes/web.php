<?php

use App\Http\Controllers\HaloService;
use App\Http\Controllers\ProcessService;
use App\Http\Controllers\ThesisService;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentService;
use App\Http\Controllers\FeedbackService;
use App\Http\Controllers\NotificationService;

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
Route::get('/test', [ProcessService::class, 'test']);

Route::get('/thesis', [ThesisService::class, 'getAll']);
Route::get('/thesis/{id}', [ThesisService::class, 'getById']);

Route::get('/students', [StudentService::class, 'getAll']);
Route::get('/students/{id}', [StudentService::class, 'getById']);

Route::get('/feedback/{id}', [FeedbackService::class, 'getByThesisId']);
Route::post('/feedback/add', [FeedbackService::class, 'addFeedbackByThesisId']);

Route::get('/notification', [NotificationService::class, 'getAllNotification']);
Route::post('/notification/add', [NotificationService::class, 'addNotification']);
Route::post('/notification/read', [NotificationService::class, 'readNotification']);

