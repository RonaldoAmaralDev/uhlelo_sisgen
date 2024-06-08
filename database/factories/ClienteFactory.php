<?php

namespace Database\Factories;

use App\Models\Cliente; // Certifique-se de ajustar o namespace conforme sua aplicação
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * O modelo associado à Factory.
     *
     * @var string
     */
    protected $model = Cliente::class;

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
            'cliente' => $this->faker->name,
            'nome_fantasia' => $this->faker->company,
            'ramo_atividade' => $this->faker->text(255),
            'situacao' => $this->faker->word,
            'motivo_situacao' => $this->faker->word,
            'cpf_cnpj' => $this->faker->unique()->cpf,
            'inscricao' => $this->faker->numerify('##########'),
            'endereco' => $this->faker->streetAddress,
            'bairro' => $this->faker->word,
            'num' => $this->faker->buildingNumber,
            'cep' => $this->faker->postcode,
            'comp' => $this->faker->secondaryAddress,
            'contato' => $this->faker->name,
            'tel' => $this->faker->phoneNumber,
            'cel' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'site' => $this->faker->domainName,
            'dt_nasc' => $this->faker->date(),
            'dt_cadastro' => $this->faker->date(),
            'ativo' => $this->faker->boolean,
            'imposto_local' => $this->faker->boolean,
            'devedor' => $this->faker->numberBetween(0, 1),
            'gera_comissao' => $this->faker->numberBetween(0, 1),
            'campos_validados' => $this->faker->numberBetween(0, 1),
        ];
    }
}
