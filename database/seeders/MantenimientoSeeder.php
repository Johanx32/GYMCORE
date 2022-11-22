<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mantenimiento;

class MantenimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mantinimento1 = new Mantenimiento();
        $mantinimento1->tipo_Mantenimiento = "Daño fisico";
        $mantinimento1->diagnostico_Manteni = "La maquina fue arreglada perfectamente, queda lista para su uso";
        $mantinimento1->fecha_Inicio = "2022-04-02";
        $mantinimento1->fecha_Fin = "2022-04-15 ";
        $mantinimento1->estado_Mantenimiento = true; 
        $mantinimento1->save();


        $mantinimento2 = new Mantenimiento();
        $mantinimento2->tipo_Mantenimiento = "Falta de grasa";
        $mantinimento2->diagnostico_Manteni = "La maquina fue engrasada perfectamente, queda lista para su uso";
        $mantinimento2->fecha_Inicio = "2022-05-02";
        $mantinimento2->fecha_Fin = "2022-05-03";
        $mantinimento2->estado_Mantenimiento = true; 
        $mantinimento2->save();
    }
}
