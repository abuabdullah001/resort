<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;


use App\Http\Controllers\userdbController;


Route::get('/', function () {
    return view('welcome');
});



// Route::get('/', function (index) {
// return view('frontEnd.home');
// });


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::resources([
    'roles' => RoleController::class,
    'permissions' => PermissionController::class,
]);

Route ::get('userdata', [App\Http\Controllers\userdbController::class,'index'])->name('userdata');
Route ::get('new_user', [App\Http\Controllers\userdbController::class,'create'])->name('new_user');
Route ::post('store_user', [App\Http\Controllers\userdbController::class,'store'])->name('store_user');


