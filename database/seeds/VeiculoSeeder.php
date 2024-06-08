<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Veiculo;

class VeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cria 10 veículos usando a factory
        \App\Models\Veiculo::factory(10)->create();
    }
}