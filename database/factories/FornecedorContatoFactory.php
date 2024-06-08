<?php

namespace Database\Factories;

use App\Models\FornecedorContato; // Ajuste o namespace conforme sua aplicação
use Illuminate\Database\Eloquent\Factories\Factory;

class FornecedorContatoFactory extends Factory
{
    /**
     * O modelo associado à Factory.
     *
     * @var string
     */
    protected $model = FornecedorContato::class;

    /**
     * Define o estado padrão do modelo.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_fornecedor' => \App\Models\Fornecedor::factory()->create()->id,
            'celular' => $this->faker->phoneNumber,
            'contato' => $this->faker->name,
        ];
    }
}