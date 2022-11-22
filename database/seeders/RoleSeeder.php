<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r = new Role();
        $r->role = "gerente";
        $r->save();

        $r1 = new Role();
        $r1->role = "cliente";
        $r1->save();

        $r2 = new Role();
        $r2->role = "entrenador";
        $r2->save();
    }
}
