<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use Illuminate\Http\Request;

class EjercicioController extends Controller
{

    public function index()
    {
        $ejercicio = Ejercicio::get();
        return view('auth.ejercicio.index', compact('ejercicio'));
    }

    public function create()
    {
        return view('auth.ejercicio.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'nombre_Ejercicio' => ' required| max:50',
                'tiempo_Ejercicio' => 'required| max:50',
                'series_Ejercicio' => 'required',
                'musculos_Involucrados' => 'required| max:255',
                'ejemplo_Ejercicio' => 'required',
                'estado_Ejercicio' => 'required'
            ]
        );

        $ejercicio = Ejercicio::create($datos);
        return view('auth.ejercicio.creado');
    }

    public function show(Ejercicio $ejercicio)
    {
        //
    }

    public function edit(Ejercicio $ejercicio)
    {
        return view('auth.ejercicio.edit', compact('ejercicio'));
    }

    public function update(Request $request, Ejercicio $ejercicio)
    {
        $datos = $request->validate(
            [
                'nombre_Ejercicio' => ' required| max:50',
                'tiempo_Ejercicio' => 'required| max:50',
                'series_Ejercicio' => 'required',
                'musculos_Involucrados' => 'required| max:255',
                'ejemplo_Ejercicio' => 'required',
                'estado_Ejercicio' => 'required'
            ]
        );

        $ejercicio->update($datos);
        return view('auth.ejercicio.actualizado');
    }

    public function destroy(Ejercicio $ejercicio)
    {
        $ejercicio->delete();
        return view('auth.ejercicio.borrado');
    }
}
