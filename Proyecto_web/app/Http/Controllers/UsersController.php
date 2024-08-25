<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{

    public function index()
    {
        $Users = User::all();
        return view('Users.index', ['Users' => $Users]);
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $User = new User();
        $User->roleID = $request->roleID;
        $User->userName = $request->userName;
        $User->nickname = $request->nickname;
        $User->email = $request->email;
        $User->password = $request->password;
        $User->phoneNumber = $request->phoneNumber;
        $User->save();
        return redirect()->route('Users.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $User = User::find($id);
        return view('Users.edit', ['User' => $User]);
    }

    public function update(Request $request, $id)
    {
        $User = User::find($id);
        //$User->roleID = $request->roleID;
        //$User->userName = $request->userName;
        $User->nickname = $request->nickname;
        $User->email = $request->email;
        $User->password = $request->password;
        //$User->phoneNumber = $request->phoneNumber;
        $User->save();
        return redirect()->route('Users.index');
    }

    public function destroy($id)
    {
        $User = User::find($id);
        $User->delete();
        return redirect()->route('');
    }
}
