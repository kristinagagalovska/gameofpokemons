<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Auth;


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

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('admin');
    }
}