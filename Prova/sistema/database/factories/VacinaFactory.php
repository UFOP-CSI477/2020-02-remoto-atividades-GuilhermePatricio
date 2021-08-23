<?php

namespace Database\Factories;

use App\Models\Vacina;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacinaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacina::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->unique()->randomElement($array = array ('CoronaVac', 'AstraZeneca', 'SpiN-Tec', 'Sputnik', 'Janssen', 'Pfizer')),
            'fabricante' => "Fabricante ".strtoupper($this->faker->unique()->randomLetter),
            'doses' => $this->faker->numberBetween($min = 0, $max = 2)
        ];
    }
}
