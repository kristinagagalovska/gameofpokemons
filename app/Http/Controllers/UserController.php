<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit')->with('user', $user);
    }

    public function update(Request $reguest, $id)
    {
        $user = User::find($id);
        $user->name = $reguest->get('name');
        $user->fullname = $reguest->get('fullname');
        $user->bday = $reguest->get('bday');
        $user->image = $reguest->get('image');
        $user->email = $reguest->get('email');
        $user->password = bcrypt($reguest->get('password'));
        $user->save();

        return redirect('/public');
    }


}