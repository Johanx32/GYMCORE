<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Cliente extends Controller
{

    public function index()
    {
        $usuario = User::All();
        return view('auth.RCliente.indexcliente')->with('usuario', $usuario);
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
