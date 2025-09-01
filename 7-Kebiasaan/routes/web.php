<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HabitController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/game', function () {
    return view('game');
});


Route::get('/', [HabitController::class, 'index'])->name('habits.index');
Route::get('/7-Kebiasaan/hasil', [HabitController::class, 'home'])->name('habits.hasil');
Route::resource('habits', HabitController::class);

Route::get('/habits/export/excel', [HabitController::class, 'exportExcel'])->name('habits.export.excel');
Route::get('/habits/export/pdf', [HabitController::class, 'exportPdf'])->name('habits.export.pdf');