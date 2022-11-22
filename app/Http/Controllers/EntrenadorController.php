<?php

namespace App\Http\Controllers;

use App\Models\Entrenador;
use App\Models\User;
use Illuminate\Http\Request;

class EntrenadorController extends Controller
{

    public function index()
    {
        $entrenador = Entrenador::get();
        return view('auth.entrenador.index', compact('entrenador'));
    }

    public function create()
    {
        $usuario = User::All();
        return view('auth.entrenador.create')->with('usuario', $usuario);
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'nombre_Entre' => ' required| max:50',
                'apellido_Entre' => 'required| max:50',
                'fecha_Nac_Entre' => 'required',
                'telefono_Entre' => 'required| max:11',
                'direccion_Entre' => 'required| max:50',
                'estado_Entre' => 'required',
                'identificacion_Usuario_FK' => 'required'
            ]
        );

        $entrenador = Entrenador::create($datos);
        return view('auth.entrenador.creado');
    }

    public function show(Entrenador $entrenador)
    {
        //
    }

    public function edit(Entrenador $entrenador)
    {
        $usuario = User::All();
        return view('auth.entrenador.edit', compact('entrenador'))->with('usuario', $usuario);
    }

    public function update(Request $request, Entrenador $entrenador)
    {
        $datos = $request->validate(
            [
                'nombre_Entre' => ' required| max:50',
                'apellido_Entre' => 'required| max:50',
                'fecha_Nac_Entre' => 'required',
                'telefono_Entre' => 'required',
                'direccion_Entre' => 'required| max:50',
                'estado_Entre' => 'required',
                'identificacion_Usuario_FK'
            ]
        );

        $entrenador->update($datos);
        return view('auth.entrenador.actualizado');
    }

    public function destroy(Entrenador $entrenador)
    {
        $entrenador->delete();
        return view('auth.entrenador.borrado');
    }
}
