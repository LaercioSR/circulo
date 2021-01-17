<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\City;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $city = $this->faker->randomElement(City::all())->id;
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->text,
            'company_id' => rand(1,(Company::count())),
            'city_id' => $city,
            'state_id' => City::where('id', $city)->first()->state_id,
        ];
    }
}
