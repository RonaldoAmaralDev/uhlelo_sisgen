<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Colaborador;

class ColaboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cria 10 colaboradores usando a factory
        \App\Models\Colaborador::factory(10)->create();
    }
}