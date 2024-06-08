<?php

namespace Database\Factories;

use App\Models\ColaboradorContato; // Ajuste o namespace conforme sua aplicação
use Illuminate\Database\Eloquent\Factories\Factory;

class ColaboradorContatoFactory extends Factory
{
    /**
     * O modelo associado à Factory.
     *
     * @var string
     */
    protected $model = ColaboradorContato::class;

    /**
     * Define o estado padrão do modelo.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_colaborador' => \App\Models\Colaborador::factory()->create()->id,
            'celular' => $this->faker->phoneNumber,
            'contato' => $this->faker->name,
        ];
    }
}
