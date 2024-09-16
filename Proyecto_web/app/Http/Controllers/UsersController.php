<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->roleID = $request->roleID;
        $user->userName = $request->userName;
        $user->nickname = $request->nickname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phoneNumber = $request->phoneNumber;
        $user->able=1;
        $user->save();
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        //
    }

    public function showProfile($id)
    {
        // Obtén el usuario autenticado
        $authUser = Auth::user();
        
        // Verifica si el usuario autenticado coincide con el ID
        if ($authUser->id != $id) {
            return redirect()->route('iniciologin')->with('error', 'No tienes permiso para acceder a este perfil.');
        }

        // Busca el usuario por su ID
        $user = User::find($id);
        
        // Verifica si el usuario existe
        if (!$user) {
            return redirect()->route('iniciologin')->with('error', 'Usuario no encontrado');
        }

        // Obtén las direcciones asociadas al usuario (relación user-address)
        $addresses = $user->addresses;

        // Pasa el usuario y las direcciones a la vista
        return view('users.perfil', ['user' => $user, 'addresses' => $addresses]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = user::find($id);
        //$User->roleID = $request->roleID;
        $user->userName = $request->userName;
        $user->nickname = $request->nickname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phoneNumber = $request->phoneNumber;
        $user->save();
        return redirect()->route('users.index');
    }


    public function destroy($id)
    {
        $user = User::find($id);
        $user->able=0;
        $user->save();
        return redirect()->route('users.index');
    }



    public function editProfile($id)
    {
        $user = User::find($id);
        return view('users.editProfile', ['user' => $user]);
    }

    public function updateProfile(Request $request, $id)
    {
        $user = user::find($id);
        //$User->roleID = $request->roleID;
        $user->userName = $request->userName;
        $user->nickname = $request->nickname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phoneNumber = $request->phoneNumber;
        $user->save();
        return redirect()->route('users.info', ['id' => $id]);
    }

    public function destroyProfile($id)
    {
        $user = User::find($id);
        $user->able=0;
        $user->save();
        return redirect()->route('inicio');
    }



}
