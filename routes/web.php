<?php

use App\Http\Livewire\Reminders;
use App\Http\Livewire\AddReminder;
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

Route::get('/', Reminders::class)->name('home');

Route::get('/add-reminder', AddReminder::class)->name('add-reminder');
