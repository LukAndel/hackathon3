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

Route::get('home', ['App\Http\Controllers\HomeController', 'home']);

Route::get('owners/detail/{id}', ['App\Http\Controllers\OwnerController', 'detail'])->name('owner.detail');
Route::get('animals/detail/{id}', ['App\Http\Controllers\AnimalController', 'detail'])->name('animal.detail');
Route::get('list', ['App\Http\Controllers\ListController', 'list']);
Route::get('list-animal', ['App\Http\Controllers\ListController', 'searchAnimal']);
Route::get('list-owner', ['App\Http\Controllers\ListController', 'searchOwner']);

Route::get('owners/create', ['App\Http\Controllers\OwnerController', 'create'])->name('create.owner');
Route::post('owners/create', ['App\Http\Controllers\OwnerController', 'store']);
Route::put('owners/create/{id}', ['App\Http\Controllers\OwnerController', 'edit'])->name('edit.owner');
Route::delete('owners/create/{id}', ['App\Http\Controllers\OwnerController', 'delete'])->name('delete.owner');

Route::get('animals/create', ['App\Http\Controllers\AnimalController', 'create'])->name('create.animal');
Route::post('animals/', ['App\Http\Controllers\AnimalController', 'store'])->name('store.animal');
Route::get('animals/create/{id}', ['App\Http\Controllers\AnimalController', 'edit'])->name('edit.animal');
Route::put('animals/create/{id}', ['App\Http\Controllers\AnimalController', 'update'])->name('update.animal');
Route::delete('animals/create/{id}', ['App\Http\Controllers\AnimalController', 'delete'])->name('delete.animal');
