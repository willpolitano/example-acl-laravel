<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;


class AdminController extends Controller
{
    public function list()
    {
        $this->authorize('list.admin');

        $users = User::all();
    
        return view('admin', ['users' => $users]);
    } 
}
