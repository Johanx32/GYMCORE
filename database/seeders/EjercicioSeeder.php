<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ejercicio;

class EjercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ejercicio1 = new Ejercicio();
        $ejercicio1->nombre_Ejercicio = "Jalon al pecho";
        $ejercicio1->tiempo_Ejercicio = "60 segundos";
        $ejercicio1->series_Ejercicio = "4";
        $ejercicio1->musculos_Involucrados = "Espalda, Biceps";
        $ejercicio1->ejemplo_Ejercicio = "null"; 
        $ejercicio1->estado_Ejercicio = true; 
        $ejercicio1->save();


        $ejercicio2 = new Ejercicio();
        $ejercicio2->nombre_Ejercicio = "Press plano";
        $ejercicio2->tiempo_Ejercicio = "60 segundos";
        $ejercicio2->series_Ejercicio = "4";
        $ejercicio2->musculos_Involucrados = "Espalda, Pecho, Deltoides";
        $ejercicio2->ejemplo_Ejercicio = "null"; 
        $ejercicio2->estado_Ejercicio = true; 
        $ejercicio2->save();

        $ejercicio3 = new Ejercicio();
        $ejercicio3->nombre_Ejercicio = "Peso muerto";
        $ejercicio3->tiempo_Ejercicio = "60 segundos";
        $ejercicio3->series_Ejercicio = "4";
        $ejercicio3->musculos_Involucrados = "Involucra todos los musculos";
        $ejercicio3->ejemplo_Ejercicio = "null"; 
        $ejercicio3->estado_Ejercicio = true; 
        $ejercicio3->save();
    }
}
