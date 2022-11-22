<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use App\Models\Mantenimiento;
use App\Models\Gerente;
use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    public function index()
    {
        $maquina = Maquina::get();
        return view('auth.maquina.index', compact('maquina'));
    }

    public function index2()
    {
        $maquina = Maquina::get();
        return view('auth.Rcliente.Maquina.index', compact('maquina'));
    }

    public function create()
    {
        $mantenimiento = Mantenimiento::All();
        $gerente = Gerente::All();
        return view('auth.maquina.create')->with('mantenimiento', $mantenimiento)->with('gerente', $gerente);
    }

    public function store(Request $request) 
    {
        $datos = $request->validate(
            [
                'nombre_Maquina' => ' required| max:50',
                'proveedor' => 'required| max:50',
                'cantidad' => 'required',
                'lugar_Maquina' => 'required| max:50',
                'identificacion_Gerente_FK' => 'required',
                'estado_Maquina' => 'required'
            ]
        );

        $maquina = Maquina::create($datos);
        return view('auth.maquina.creado');
    }

    public function show(Maquina $maquina)
    {
        //
    }

    public function edit(Maquina $maquina)
    {
        $mantenimiento = Mantenimiento::All();
        $gerente = Gerente::All();
        return view('auth.maquina.edit', compact('maquina'))->with('mantenimiento', $mantenimiento)->with('gerente', $gerente);
    }

    public function update(Request $request, Maquina $maquina)
    {
        $datos = $request->validate(
            [
                'nombre_Maquina' => ' required| max:50',
                'proveedor' => 'required| max:50',
                'cantidad' => 'required',
                'lugar_Maquina' => 'required| max:50',
                'identificacion_Gerente_FK',
                'estado_Maquina' => 'required'
            ]
        );

        $maquina->update($datos);
        return view('auth.maquina.actualizado');
    }

    public function destroy(Maquina $maquina)
    {
        $maquina->delete();
        return view('auth.maquina.borrado');
    }
}
