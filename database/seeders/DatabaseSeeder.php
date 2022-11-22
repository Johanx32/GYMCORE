<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Mantenimiento;
use App\Models\Ejercicio;
use App\Models\ValoracionFisica;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(MantenimientoSeeder::class);
        $this->call(EjercicioSeeder::class);
        $this->call(ValoracionFisicaSeeder::class);
    }
}
