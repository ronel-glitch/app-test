<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\CampusLivewire;
use App\Http\Livewire\SigninLivewire;
use App\Http\Livewire\SignUpLivewire;
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


Route::middleware(['guest'])->group(function () {

    Route::get('/', SigninLivewire::class)->name('index');
    
    Route::get('/signup', SignUpLivewire::class)->name('signup');
    
});

Route::middleware(['auth'])->group(function () {

    Route::get('/campus', CampusLivewire::class)->name('campus');

    Route::get('/create', CampusCreateLivewire::class)->name('campus.create');
    
    Route::get('/update/{campus}', CampusUpdateLivewire::class)->name('campus.update');
    
});


Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('index');
})->name('logout');



