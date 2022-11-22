<?php

namespace App\Http\Controllers;

use App\Models\ValoracionFisica;
use Illuminate\Http\Request;

class ValoracionFisicaController extends Controller
{

    public function index()
    {
        $valoracion_fisica = ValoracionFisica::get();
        return view('auth.valoracion_fisica.index', compact('valoracion_fisica'));
    }

    public function create()
    {
        return view('auth.valoracion_fisica.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'peso' => ' required',
                'estatura' => 'required',
                'descripcion_Medidas' => 'required',
                'imc' => 'required',
                'fecha_Valoracion' => 'required',
                'estado_Valoracion' => 'required'
            ]
        );

        $valoracion_fisica = ValoracionFisica::create($datos);
        return view('auth.valoracion_fisica.creado');
    }

    public function show(ValoracionFisica $valoracion_fisica)
    {
        //
    }

    public function edit(ValoracionFisica $valoracion_fisica)
    {
        return view('auth.valoracion_fisica.edit', compact('valoracion_fisica'));
    }

    public function update(Request $request, ValoracionFisica $valoracion_fisica)
    {
        $datos = $request->validate(
            [
                'peso' => ' required',
                'estatura' => 'required',
                'descripcion_Medidas' => 'required',
                'imc' => 'required',
                'fecha_Valoracion' => 'required',
                'estado_Valoracion' => 'required'
            ]
        );

        $valoracion_fisica->update($datos);
        return view('auth.valoracion_fisica.actualizado');
    }

    public function destroy(ValoracionFisica $valoracion_fisica)
    {
        $valoracion_fisica->delete();
        return view('auth.valoracion_fisica.borrado');
    }
}
