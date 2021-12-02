<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\JsonController;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/',[UniversityController::class,'index'])->name('get.universities');
Route::get('/',[JsonController::class,'index'])->name('get.universities');
Route::get('/add',function(){return view('Add_univ');})->name('add');
Route::post('/add',[JsonController::class,'add'])->name('add_univ');
