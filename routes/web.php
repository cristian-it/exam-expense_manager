<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

// Auth
Route::get('/',[AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'auth_login']);

Route::get('logout',[AuthController::class, 'auth_logout']);

// Middleware
Route::group(['middleware' =>'useradmin'], function (){
    // Dashboard
    Route::get('adminPanel/dashboard',[DashboardController::class, 'dashboard']);

    // Role
    Route::get('adminPanel/role',[RoleController::class, 'list']);
    Route::get('adminPanel/role/add',[RoleController::class, 'add']);
    Route::post('adminPanel/role/add',[RoleController::class, 'insert']);
    Route::get('adminPanel/role/edit/{id}',[RoleController::class, 'edit']);
    Route::post('adminPanel/role/edit/{id}',[RoleController::class, 'update']);
    Route::get('adminPanel/role/delete/{id}',[RoleController::class, 'delete']);

    // User
    Route::get('adminPanel/user',[UserController::class, 'list']);
    Route::get('adminPanel/user/add',[UserController::class, 'add']);
    Route::post('adminPanel/user/add',[UserController::class, 'insert']);
    Route::get('adminPanel/user/edit/{id}',[UserController::class, 'edit']);
    Route::post('adminPanel/user/edit/{id}',[UserController::class, 'update']);
    Route::get('adminPanel/user/delete/{id}',[UserController::class, 'delete']);


});