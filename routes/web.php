<?php

use Illuminate\Support\Facades\Route;
use \App\Models\User;


Route::get('/', function () {
    Auth::loginUsingId(1);

    $users = User::all();

    dd(Auth::user()->hasPermission('list.admin'));
    
    return view('welcome', ['users' => $users]);
});
