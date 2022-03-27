<?php

use App\Http\Livewire\CampusLivewire;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CampusCreateLivewire;
use App\Http\Livewire\CampusUpdateLivewire;

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

Route::get('/', CampusLivewire::class)->name('campus');

Route::get('/create', CampusCreateLivewire::class)->name('campus.create');

Route::get('/update/{campus}', CampusUpdateLivewire::class)->name('campus.update');
