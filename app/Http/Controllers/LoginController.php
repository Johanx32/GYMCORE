<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El usuario o la contraseña son incorrectos, por favor vuelva a intentar',
            ]);
        } else if (auth()->user()->id_Role_FK == 1) {
            return redirect()->to('gerente');
        } else if (auth()->user()->id_Role_FK == 3) {
            return redirect()->to('entrenador');
        } else if (auth()->user()->id_Role_FK == 2) {
            return redirect()->to('cliente');
        } else {
            return redirect()->to('/login');
        }
    }
    
    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/login');
    }
}
