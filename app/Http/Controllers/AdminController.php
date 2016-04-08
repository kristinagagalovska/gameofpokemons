<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin');
    }

    public function view()
    {
        $users = User::all()->where('admin', 0);
        return view('admin.users.view')->with('users', $users);
    }
}