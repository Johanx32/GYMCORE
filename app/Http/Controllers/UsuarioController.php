<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Mail;
use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuario = User::get();
        return view('auth.usuario.index', compact('usuario'));
    }

    public function create()
    {
        $role = Role::All();
        return view('auth.usuario.create')->with('role',$role);
    }

    public function store(Request $request)
    {

        $datos = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|max:50| email',
                'id_Role_FK' => 'required',
                'password' => ''
            ]
        );
        $password=Str::random(20);
        $datos["password"]=$password;
        var_dump($datos);
       

        $usuario = User::create($datos);
        Mail::to('gymcore@gym.com')->send(new DemoMail( $datos));
        return view('auth.usuario.creado');
        
    }

    public function show(User $usuario)
    {
        //
    }

    public function edit(User $usuario)
    {
        $role = Role::All();
        //var_dump($usuario);
        return view('PerfilAdmin', compact('usuario'))->with('usuario',$usuario);
    }

    public function update(Request $request, User $usuario)
    {
        $datos = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|max:50| email',
                'id_Role_FK',
                'password' => 'required|max:60'
            ]
        );
        $usuario->update($datos);
        return view('auth.usuario.actualizado');
    }

    public function destroy(User $usuario)
    {
        $usuario->delete();
        return view('auth.usuario.borrado');
    }
}
