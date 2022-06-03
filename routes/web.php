<?php

use App\Http\Controllers\Homecontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[Homecontroller::class,'home'])->name('home');

Route::get('create',[Homecontroller::class,'create'])->name('create');
Route::post('create',[Homecontroller::class,'create'])->name('create');

Route::post('student/add{id}',[Homecontroller::class,'store'])->name('student.add');