<?php

namespace Database\Factories;

use App\Models\ColaboradorContaBancaria; // Ajuste o namespace conforme sua aplicação
use Illuminate\Database\Eloquent\Factories\Factory;

class ColaboradorContaBancariaFactory extends Factory
{
    /**
     * O modelo associado à Factory.
     *
     * @var string
     */
    protected $model = ColaboradorContaBancaria::class;

    /**
     * Define o estado padrão do modelo.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_colaborador' => \App\Models\Colaborador::factory()->create()->id,
            'cod_banco' => \App\Models\Banco::factory()->create()->id,
            'tipo' => $this->faker->randomElement(['C', 'P']), // 'C' para Conta Corrente, 'P' para Poupança
            'cod_tp_chave_pix' => \App\Models\TipoChavePix::factory()->create()->id,
            'agencia' => $this->faker->numerify('##########'),
            'agencia_dv' => $this->faker->numerify('###'),
            'conta' => $this->faker->numerify('####################'),
            'conta_dv' => $this->faker->numerify('###'),
            'favorecido' => $this->faker->name,
            'cpf' => $this->faker->cpf(false),
            'chavepix' => $this->faker->unique()->md5,
            'chavepix_telefone' => $this->faker->phoneNumber,
            'chavepix_email' => $this->faker->unique()->safeEmail,
            'principal' => $this->faker->boolean,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
