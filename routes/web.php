<?php

use Illuminate\Support\Facades\Route;
use \App\Models\User;
use App\Http\Controllers\AdminController;

Auth::loginUsingId(1);

Route::get('/', function () {
    $users = User::all();
    
    return view('welcome', ['users' => $users]);
})->middleware('auth', 'can:list.guest');

Route::get('/admin', [AdminController::class, 'list'])->middleware('auth', 'can:list.admin');
