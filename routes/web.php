<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Models\Portfolio;
<<<<<<< HEAD
=======

>>>>>>> 5c086d578443f5f39767b1bd51f6390c55bf9375
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

Route::get('/', function () {
    $portfolio = Portfolio::all();
    return view('welcome', compact("portfolio"));
<<<<<<< HEAD

=======
>>>>>>> 5c086d578443f5f39767b1bd51f6390c55bf9375
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('portfolios', PortfolioController::class);

<<<<<<< HEAD
require __DIR__.'/auth.php';
=======
require __DIR__ . '/auth.php';
>>>>>>> 5c086d578443f5f39767b1bd51f6390c55bf9375
