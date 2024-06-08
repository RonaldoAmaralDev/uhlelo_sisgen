<?php

namespace Database\Factories;

use App\Models\Colaborador; // Ajuste o namespace conforme sua aplicação
use Illuminate\Database\Eloquent\Factories\Factory;

class ColaboradorFactory extends Factory
{
    /**
     * O modelo associado à Factory.
     *
     * @var string
     */
    protected $model = Colaborador::class;

    /**
     * Define o estado padrão do modelo.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_colaborador2' => 0, // Como mencionado na migração, o valor padrão é 0
            'cod_tp_colaborador' => null,
            'cod_departamento' => null,
            'cod_empresa' => null,
            'matricula' => $this->faker->randomNumber(5),
            'cod_cidade' => null,
            'cod_estado' => null,
            'colaborador' => $this->faker->name,
            'cpf' => $this->faker->cpf(false),
            'rg' => $this->faker->numerify('###############'),
            'rg_dt_expedicao' => $this->faker->date(),
            'titulo_eleitor' => $this->faker->numerify('############'),
            'zona' => $this->faker->numerify('###'),
            'secao' => $this->faker->numerify('###'),
            'ctps_num' => $this->faker->numerify('##########'),
            'ctps_serie' => $this->faker->numerify('########'),
            'ctps_uf' => $this->faker->stateAbbr,
            'ctps_dt_expedicao' => $this->faker->date(),
            'cert_reserva' => $this->faker->numerify('###########'),
            'pis_pasep' => $this->faker->numerify('############'),
            'pis_dt' => $this->faker->date(),
            'endereco' => $this->faker->streetAddress,
            'bairro' => $this->faker->citySuffix,
            'num' => $this->faker->buildingNumber,
            'cep' => $this->faker->postcode,
            'comp' => $this->faker->secondaryAddress,
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'ecivil' => $this->faker->randomElement(['S', 'C', 'D', 'V']),
            'tel' => $this->faker->phoneNumber,
            'cel' => $this->faker->phoneNumber,
            'fax' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'dt_nasc' => $this->faker->date(),
            'dt_admissao' => $this->faker->date(),
            'dt_cadastro' => $this->faker->date(),
            'ativo' => $this->faker->boolean,
            'afastado' => $this->faker->boolean,
            'foto_cnh' => $this->faker->imageUrl(),
            'tipo_cnh' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E']),
            'num_cnh' => $this->faker->numerify('##############'),
            'val_cnh' => $this->faker->date(),
            'res_168' => $this->faker->boolean,
            'nome_pai' => $this->faker->name('male'),
            'nome_mae' => $this->faker->name('female'),
            'ref1' => $this->faker->name,
            'tel_ref1' => $this->faker->phoneNumber,
            'ref2' => $this->faker->name,
            'tel_ref2' => $this->faker->phoneNumber,
            'ref3' => $this->faker->name,
            'tel_ref3' => $this->faker->phoneNumber,
            'comissao' => $this->faker->randomFloat(2, 0, 100),
            'foto_colab' => $this->faker->imageUrl(),
            'senha_os' => '0',
            'finaliza_os' => null,
            'executa_os' => null,
            'ajusta_cadastro_veiculo' => 0,
            'linha_amarela' => 0,
            'borracharia' => 0,
        ];
    }
}
