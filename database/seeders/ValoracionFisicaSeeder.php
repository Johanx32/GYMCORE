<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ValoracionFisica;

class ValoracionFisicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $valoracion1 = new ValoracionFisica();
        $valoracion1->peso = 65;
        $valoracion1->estatura = 150;
        $valoracion1->descripcion_Medidas = "Cintura: 30cm, Brazos: 20cm";
        $valoracion1->imc = 20;
        $valoracion1->fecha_Valoracion = "2022-09-02"; 
        $valoracion1->estado_Valoracion = true; 
        $valoracion1->save();


        $valoracion2 = new ValoracionFisica();
        $valoracion2->peso = 68;
        $valoracion2->estatura = 170;
        $valoracion2->descripcion_Medidas = "Cintura: 20cm, Brazos: 14cm";
        $valoracion2->imc = 15;
        $valoracion2->fecha_Valoracion = "2022-09-06"; 
        $valoracion2->estado_Valoracion = true; 
        $valoracion2->save();

        $valoracion3 = new ValoracionFisica();
        $valoracion3->peso = 70;
        $valoracion3->estatura = 175;
        $valoracion3->descripcion_Medidas = "Cintura: 20cm, Brazos: 15cm";
        $valoracion3->imc = 18;
        $valoracion3->fecha_Valoracion = "2022-09-08"; 
        $valoracion3->estado_Valoracion = true; 
        $valoracion3->save();
    }
}
