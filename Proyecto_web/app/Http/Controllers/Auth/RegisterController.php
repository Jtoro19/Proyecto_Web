<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Session;

class RegisterController extends Controller
{
    public function __construct()
    {
        // Middleware para asegurar que solo usuarios invitados accedan al registro
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        // Fetch roles from the database
        $roles = Role::all();

        // Pass roles to the view
        return view('auth.register')->with('roles', $roles);
    }

    public function register(Request $request)
    {
        // Validar la solicitud
        $this->validator($request->all())->validate();

        // Crear el usuario
        $user = $this->create($request->all());

        // Loguear al usuario
        auth()->login($user);

        // Guardar el rol del usuario en la sesión
        if ($user->role) {
            session(['roleName' => $user->role->roleName]);
        } else {
            session(['roleName' => 'sin rol']);
        }

        // Redirigir a la página 'iniciologin' en lugar de 'home'
        return redirect()->intended('iniciologin');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'roleID' => 'required|exists:roles,id',
            'userName' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phoneNumber' => 'required|numeric', // Cambia 'string' a 'numeric'
            'password' => 'required|string|min:8|confirmed',
            'g-recaptcha-response' => function ($atribute, $value, $fail) {
                $secretKey = config('services.recaptcha.secret');
                $response = $value;
                $userIp = $_SERVER['REMOTE_ADDR'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$userIp";
                $response = file_get_contents($url);
                $response = json_decode($response);
                if (!$response->success) {
                    Session::flash('g-recaptcha-response', 'Por favor marcar el recaptcha');
                    Session::flash('alert-class', 'alert-danger');
                    return $fail('Por favor marcar el recaptcha');
                }
            },
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'roleID' => $data['roleID'],
            'userName' => $data['userName'],
            'nickname' => $data['nickname'],
            'email' => $data['email'],
            'phoneNumber' => $data['phoneNumber'],
            'password' => Hash::make($data['password']),
            'able' => 1,
        ]);
    }
}
