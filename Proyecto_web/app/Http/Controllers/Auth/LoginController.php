<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        // Verifica las credenciales del usuario
        $credentials = $this->credentials($request);

        // Intenta autenticar al usuario
        if (Auth::attempt($credentials)) {
            // Verifica si el usuario está habilitado
            $user = Auth::user();
            if ($user->able !== 1) {
                // Si el usuario no está habilitado, cerrar sesión
                Auth::logout();
                throw ValidationException::withMessages([
                    'email' => ['Tu cuenta no está habilitada.'],
                ]);
            }
            return true;
        }

        return false;
    }

    protected function sendLoginResponse(Request $request)
    {
        $this->clearLoginAttempts($request);

        $user = auth()->user();

        // Verificar si el usuario tiene un rol asignado
        if ($user->role) {
            // Guardar el rol del usuario en la sesión
            session(['roleName' => $user->role->roleName]);
        } else {
            // Manejo en caso de que el usuario no tenga rol asignado
            session(['roleName' => 'sin rol']);
        }

        // Redirigir según el rol
        if ($user->roleID == 1) {
            return redirect('/manage');
        }

        return redirect('/iniciologin');
    }
}



