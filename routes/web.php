<?php

use Illuminate\Support\Facades\Route;
use \App\Models\User;


Route::get('/', function () {
    Auth::loginUsingId(1);

    $users = User::all();
    
    return view('welcome', ['users' => $users]);
});
