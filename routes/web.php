<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StrategiController;
use App\Http\Controllers\IndikatorController;
use App\Http\Controllers\RenstrapageController;

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

//Main Routes
// Route::get('/', function(){return view('welcome');});
Route::resource('/home',HomeController::class);
// Route::get('/departemen/{departemen}',[DepartemenController::class,'show']);
// Route::get('/unit/{unit}',[UnitController::class,'show']);
Route::get('/renstrapage/{periode}',[RenstrapageController::class,'show']);
// Route::post('/renstrapage/{periode}',[RenstrapageController::class,'show']) -> name('storejenis');


Route::resource('/goal', GoalController::class);
Route::resource('/strategi', StrategiController::class);
Route::resource('/indikator', IndikatorController::class);

// //Route untuk ajax Searching
// Route::post('/renstrapage/{periode}',[RenstrapageController::class,'directSearch']);
// Route::get('/indikator-list',[RenstrapageController::class,'indikatorListAjax']);