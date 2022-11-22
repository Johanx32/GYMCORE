<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cliente;
use App\Models\Entrenador;
use App\Models\Gerente;



use Illuminate\Http\Request;

class PaginaGerente extends Controller
{

    public function index()
    {
        //total usuarios
        $usuario = User::get();
        //total de cliente
        $cliente = Cliente::all()->count();
        $entrenador = Entrenador::all()->count();
        $gerente = Gerente::all()->count();

        return view('auth.RGerente.indexAdmin')->
                                                with('usuario' , $usuario)
                                                ->with('totalclientes' , $cliente)
                                                ->with('totalentrenadores' , $entrenador)
                                                ->with('totalgerentes' , $gerente);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
