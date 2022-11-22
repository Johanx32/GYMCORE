<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use App\Models\Maquina;
use Illuminate\Http\Request;

class MantenimientoController extends Controller
{

    public function index()
    {
        $mantenimiento = Mantenimiento::get();
        $maquina = Maquina::get();
        return view('auth.mantenimiento.index', compact('mantenimiento'))->with('maquina', $maquina);
    }

    public function create()
    {
        $maquina = Maquina::All();
        return view('auth.mantenimiento.crear')->with('maquina', $maquina);
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'tipo_Mantenimiento' => ' max:50',
                'diagnostico_Manteni' => 'required| max:50',
                'fecha_Inicio' => 'required',
                'fecha_Fin' => 'required',
                'estado_Mantenimiento' => 'required',
                'id_Maquina_FK' => 'required'
            ]
        );

        $mantenimiento = Mantenimiento::create($datos);
        return view('auth.mantenimiento.creado');
    }

    public function edit(Mantenimiento $mantenimiento)
    {
        $maquina = Maquina::All();
        return view('auth.mantenimiento.edit', compact('mantenimiento'))->with('maquina', $maquina);
    }

    public function update(Request $request, Mantenimiento $mantenimiento)
    {
        $datos = $request->validate(
            [
                'tipo_Mantenimiento' => ' max:50',
                'diagnostico_Manteni' => 'required| max:50',
                'fecha_Inicio' => 'required',
                'fecha_Fin' => 'required',
                'estado_Mantenimiento' => 'required',
                'id_Maquina_FK' => 'required'

            ]
        );

        $mantenimiento->update($datos);
        return view('auth.mantenimiento.actualizado');
    }

    public function destroy(Mantenimiento $mantenimiento)
    {
        $mantenimiento->delete();
        return view('auth.mantenimiento.borrado');
    }
}
