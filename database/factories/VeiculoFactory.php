<?php

namespace Database\Factories;

use App\Models\Veiculo; // Ajuste o namespace conforme sua aplicação
use Illuminate\Database\Eloquent\Factories\Factory;

class VeiculoFactory extends Factory
{
    /**
     * O modelo associado à Factory.
     *
     * @var string
     */
    protected $model = Veiculo::class;

    /**
     * Define o estado padrão do modelo.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_veiculo_especie' => \App\Models\VeiculoEspecie::factory()->create()->cod_veiculo_especie,
            'frota' => $this->faker->randomNumber(5),
            'cod_veiculo_marca' => \App\Models\VeiculoMarca::factory()->create()->cod_veiculo_marca,
            'cod_tp_frota' => \App\Models\TipoFrota::factory()->create()->id,
            'frota_aux' => $this->faker->randomNumber(5),
            'cod_veiculo_modelo' => \App\Models\VeiculoModelo::factory()->create()->cod_veiculo_modelo,
            'cod_empresa' => \App\Models\Empresa::factory()->create()->id,
            'cod_unidade' => \App\Models\Unidade::factory()->create()->id,
            'cod_sub_unidade' => \App\Models\SubUnidade::factory()->create()->id,
            'cod_cor' => \App\Models\Cores::factory()->create()->id,
            'posicao_conjunto' => $this->faker->numberBetween(0, 1),
            'backlog_aberto' => $this->faker->numberBetween(0, 1),
            'os_ciclo_preventivo' => null,
            'km_atual' => $this->faker->randomFloat(2, 0, 999999),
            'horimetro_analogico' => $this->faker->randomFloat(2, 0, 999999),
            'horimetro_digital' => $this->faker->randomFloat(2, 0, 999999),
            'motor' => $this->faker->word,
            'retarder' => null,
            'tara' => $this->faker->randomFloat(2, 0, 999999),
            'capacidade' => $this->faker->randomFloat(2, 0, 999999),
            'placa' => $this->faker->vehicleRegistration,
            'renavam' => $this->faker->randomNumber(11),
            'chassi' => $this->faker->swiftBicNumber,
            'antt' => $this->faker->randomNumber(7),
            'dt_antt' => $this->faker->date(),
            'cor' => $this->faker->colorName,
            'ano' => $this->faker->year,
            'modelo_fab' => $this->faker->year,
            'doc' => $this->faker->text,
            'dt_val_doc' => $this->faker->date(),
            'dt_compra' => $this->faker->date(),
            'dt_garantia' => $this->faker->date(),
            'garantia' => $this->faker->numberBetween(0, 1),
            'tanque' => $this->faker->randomElement(['Sim', 'Não']),
            'obs' => $this->faker->text,
            'ativo' => $this->faker->numberBetween(0, 1),
            'linha_amarela' => $this->faker->numberBetween(0, 1),
            'modulo_trocado' => null,
            'dt_cad' => $this->faker->dateTime(),
            'cod_sec_user' => null,
        ];
    }
}
