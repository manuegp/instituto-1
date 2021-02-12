<?php

namespace Database\Factories;

use App\Models\Nota;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Materia;
use App\Models\User;
class NotaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $countUser=User::count();
        return [
            'user_id' => $this->faker->numberBetween(1, $countUser),
            'materia_id' => $this->faker->numberBetween(1, 5),
            'evaluacion' => $this->faker->numberBetween(1, 3),
            'nota' => $this->faker->numberBetween(0, 10),

        ];
    }
}
