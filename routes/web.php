<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomepageController::class, 'showHomepage'])->name('homepage');
Route::get('/profile', [HomepageController::class, 'showProfilepage'])->name('profile');
Route::get('/journal', [HomepageController::class, 'showJournalpage'])->name('journal');
Route::get('/reflection', [HomepageController::class, 'showReflectionpage'])->name('reflection');
Route::get('/album', [HomepageController::class, 'showAlbumpage'])->name('album');
