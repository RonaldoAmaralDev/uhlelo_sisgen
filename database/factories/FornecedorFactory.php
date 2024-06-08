<?php

namespace Database\Factories;

use App\Models\Fornecedor; // Ajuste o namespace conforme sua aplicação
use Illuminate\Database\Eloquent\Factories\Factory;

class FornecedorFactory extends Factory
{
    /**
     * O modelo associado à Factory.
     *
     * @var string
     */
    protected $model = Fornecedor::class;

    /**
     * Define o estado padrão do modelo.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_cidade' => \App\Models\Cidade::factory()->create()->id,
            'cod_estado' => \App\Models\Estado::factory()->create()->id,
            'fornecedor' => $this->faker->company,
            'nome_fantasia' => $this->faker->companySuffix,
            'situacao' => $this->faker->word,
            'motivo_situacao' => $this->faker->sentence,
            'ramo_atividade' => $this->faker->jobTitle,
            'cpf_cnpj' => $this->faker->unique()->cpf(false),
            'endereco' => $this->faker->streetAddress,
            'comp' => $this->faker->secondaryAddress,
            'bairro' => $this->faker->word,
            'num' => $this->faker->randomNumber(),
            'cep' => $this->faker->numerify('###########'),
            'contato' => $this->faker->name,
            'tel' => $this->faker->phoneNumber,
            'cel' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'site' => $this->faker->url,
            'dt_cadastro' => $this->faker->date(),
            'ativo' => $this->faker->boolean,
            'motorista' => $this->faker->boolean,
            'foto_cnh' => $this->faker->imageUrl(),
            'tipo_cnh' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E']),
            'num_cnh' => $this->faker->numerify('##############'),
            'val_cnh' => $this->faker->date(),
            'metrologia' => null,
            'abastecimento' => null,
            'contribuinte_icms' => null,
            'bloqueado' => null,
        ];
    }
}