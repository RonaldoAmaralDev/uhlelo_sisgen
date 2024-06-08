<?php

namespace Database\Factories;

use App\Models\FornecedorContasBancarias; // Ajuste o namespace conforme sua aplicação
use Illuminate\Database\Eloquent\Factories\Factory;

class FornecedorContasBancariasFactory extends Factory
{
    /**
     * O modelo associado à Factory.
     *
     * @var string
     */
    protected $model = FornecedorContasBancarias::class;

    /**
     * Define o estado padrão do modelo.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_fornecedor' => \App\Models\Fornecedor::factory()->create()->id,
            'cod_banco' => null,
            'tipo' => $this->faker->randomElement(['C', 'P']), // 'C' para Corrente, 'P' para Poupança
            'cod_tp_chave_pix' => null,
            'agencia' => $this->faker->numerify('#####'),
            'agencia_dv' => $this->faker->numerify('###'),
            'conta' => $this->faker->numerify('##########'),
            'conta_dv' => $this->faker->numerify('###'),
            'favorecido' => $this->faker->name,
            'cpf' => $this->faker->cpf(false),
            'chavepix' => $this->faker->md5,
            'chavepix_telefone' => $this->faker->phoneNumber,
            'chavepix_email' => $this->faker->safeEmail,
            'principal' => $this->faker->boolean,
        ];
    }
}
