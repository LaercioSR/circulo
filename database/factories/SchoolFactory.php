<?php

namespace Database\Factories;

use App\Models\School;
use App\Models\User;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = School::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $city = rand(1,(City::count()));
        return [
            'name' => $this->faker->name,
            'cnpj' => $this->faker->numerify('##.###.###/####-##'),
            'user_id' => rand(1,(User::count())),
        ];
    }
}
