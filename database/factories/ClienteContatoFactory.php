<?php

namespace Database\Factories;

use App\Models\ClienteContato; // Ajuste o namespace conforme sua aplicação
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteContatoFactory extends Factory
{
    /**
     * O modelo associado à Factory.
     *
     * @var string
     */
    protected $model = ClienteContato::class;

    /**
     * Define o estado padrão do modelo.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_cliente' => \App\Models\Cliente::factory()->create()->id,
            'cod_tp_contato' => \App\Models\TipoContato::factory()->create()->id,
            'contato' => $this->faker->name,
            'celular' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'principal' => $this->faker->boolean,
            'dt_cad' => $this->faker->dateTime(),
            'cod_sec_user' => \App\Models\User::factory()->create()->id,
        ];
    }
}
