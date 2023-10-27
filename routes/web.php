<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
use App\Models\Movie;

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

// GETS THE ROUTE FRON THE Controller PageController CLASS AND USES THE 'index' METHOD. GIVES THE ROUTE THE "home" NAME
Route::get('/', [PageController::class, 'index', 'movies' => Movie::all()])->name('home');
