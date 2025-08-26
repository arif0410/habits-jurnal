<?php

use App\Http\Controllers\TaskController;
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
// Route::get('/7-Kebiasaan', function () {
//     return view('test');
// });


Route::get('/7-Kebiasaan', [TaskController::class, 'index']);
Route::post('/habits/simpan', [TaskController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/game', function () {
    return view('game');
});

