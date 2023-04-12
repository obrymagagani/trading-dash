<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view ('users.index')->with('user', $user);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        User::create($input);
        return redirect('users')->with('flash_message', 'User  Addedd!');
    }


    public function show($id)
    {
        $user = User::find($id);
        return view('users.show')->with('users', $user);
    }
    public function create()
    {
        return view('users.create');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with('user', $user);
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('users.index')->with('flash_message', 'User Updated!');
    }


    public function destroy($id)
    {
        User::destroy($id);
        return redirect('users')->with('flash_message', 'Users deleted!');
    }
}

