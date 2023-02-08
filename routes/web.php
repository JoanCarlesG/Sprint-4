<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\TeamController;
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


//Route::resource('user', 'App\Http\Controllers\UserController');
Route::resource('teams', 'App\Http\Controllers\TeamController');
Route::resource('matches', 'App\Http\Controllers\MatchesController');

