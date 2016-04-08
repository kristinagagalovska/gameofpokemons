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
}