<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Pokemon;
use Illuminate\Support\Facades\Auth;

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

    public function freePokemons(Request $request)
    {
        $pokemons = Pokemon::all()->where('user_id', NULL);

        return view('user.pokemons')->with('pokemons', $pokemons);
    }

    public function choosePokemon()
    {
        return view('user.choose');
    }

    public function savePokemon(Request $request, $id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon->user_id = Auth::user()->id;
        $pokemon->save();
        return redirect('/public');
    }

    public function myPokemons(Request $request)
    {
        $id = Auth::user()->id;
        $pokemons = Pokemon::all()->where('user_id', $id);

        return view('user.mypokemons')->with('pokemons', $pokemons);
    }

    public function abandon()
    {
        return view('user.abandon');
    }

    public function saveAbandon(Request $request, $id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon->user_id = null;
        $pokemon->save();
        return redirect('/public');
    }




}