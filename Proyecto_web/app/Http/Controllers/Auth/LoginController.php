<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

