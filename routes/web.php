<?php

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

Route::get('list', ['App\Http\Controllers\ListController', 'list']);
Route::get('owners/detail/{id}', ['App\Http\Controllers\OwnerController', 'detail'])->name('owner.detail');
Route::get('animals/detail/{id}', ['App\Http\Controllers\AnimalController', 'detail'])->name('animal.detail');
