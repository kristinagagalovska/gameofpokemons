<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Auth;
use App\Pokemon;


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

    public function mark($id)
    {
        $user = User::find($id);
        return view('admin.users.mark')->with('user', $user);
    }
    public function save(Request $request, $id)
    {
        $user = User::find($id);
        $user->admin = 1;
        $user->save();

        return redirect('admin');
    }

    public function create(Request $request)
    {
        return view('admin.pokemons.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'strength' => 'required|integer|between:0,100',
            'image' => 'required',
        ]);

        $pokemon = new Pokemon();
        $pokemon->name = $request->get('name');

        $image = $request->file('image');
        $image->move(public_path() . '/image/', $image->getClientOriginalName());
        $pokemon->image = $image->getClientOriginalName();
        $pokemon->strength = $request->get('strength');
        $pokemon->user_id = $request->get('user_id');

        $pokemon->save();

        return redirect('admin');
    }

    public function show()
    {
        $pokemons = Pokemon::all();

        return view('admin.pokemons.show')->with('pokemons', $pokemons);
    }

    public function edit($id)
    {
        $pokemon = Pokemon::find($id);

        return view('admin.pokemons.edit')->with('pokemon', $pokemon);
    }

    public function update(Request $request, $id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon->name=$request->get('name');
        $pokemon->image=$request->get('image');
        $pokemon->strength=$request->get('strength');

        $pokemon->save();

        return redirect()->route('admin.pokemons.show');
    }





}