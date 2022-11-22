<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use App\Models\Maquina;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class ReporteController extends Controller
{
    public function index()
    {
        $reporte = Reporte::get();
        return view('auth.reporte.index', compact('reporte'));
    }

    public function index2()
    {
        $reporte = Reporte::get();
        return view('auth.RCliente.reporte.index', compact('reporte'));
    }

    public function create()
    {
        $maquina = Maquina::All();
        $usuario = User::All();

        return view('auth.reporte.create')->with('maquina', $maquina)->with('usuario', $usuario);
    }

    public function store(Request $request)
    {
        $datos = $request->validate(
            [
                'fecha_Reporte' => ' required| max:50',
                'descripcion' => 'required| max:50',
                'estado_Reporte' => 'required',
                'id_Maquina_FK' => 'required',
                'identificacion_Usuario_FK' => 'required'
            ]
        );

        $reporte = Reporte::create($datos);
        return view('auth.reporte.creado');
    }

    public function create2()
    {
        $maquina = Maquina::All();
        $usuario = User::All();

        return view('auth.Rcliente.reporte.create')->with('maquina', $maquina)->with('usuario', $usuario);
    }

    public function store2(Request $request)
    {
        $datos = $request->validate(
            [
                'fecha_Reporte' => ' required| max:50',
                'descripcion' => 'required| max:50',
                'estado_Reporte' => 'required',
                'id_Maquina_FK' => 'required',
                'identificacion_Usuario_FK' => 'required'
            ]
        );

        $reporte = Reporte::create($datos);
        return view('auth.RCliente.reporte.creado');
    }

    public function show(Reporte $reporte)
    {
        //
    }

    public function edit(Reporte $reporte)
    {
        $maquina = Maquina::All();
        $usuario = User::All();
        return view('auth.reporte.edit', compact('reporte'))->with('maquina', $maquina)->with('usuario', $usuario);
    }

    public function update(Request $request, Reporte $reporte)
    {
        $datos = $request->validate(
            [
                'fecha_Reporte' => ' required| max:50',
                'descripcion' => 'required| max:50',
                'estado_Reporte' => 'required',
                'id_Maquina_FK',
                'identificacion_Usuario_FK'
            ]
        );

        $reporte->update($datos);
        return view('auth.reporte.actualizado');
    }

    public function destroy(Reporte $reporte)
    {
        $reporte->delete();
        return view('auth.reporte.borrado');
    }

    public function downloadPDF()
    {
        $reporte = Reporte::All();
        view()->share('auth.reporte.download',$reporte);
        $pdf = PDF::loadView('auth.reporte.download',['reporte' => $reporte]);
        return $pdf->download('Listado de Reportes');
    }

}
