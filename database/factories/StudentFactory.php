<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Student;
use App\Models\User;
use App\Models\School;
use App\Models\Interest;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'date_birth' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'registration_number' => $this->faker->ean8,
            'school_year' =>  $this->faker->randomElement($array = array ('1_ANO', '2_ANOR', '3_ANO', '4_ANO', 'CONCLUIU')),
            'user_id' => rand(1,(User::count())),
            'city_id' => $this->faker->randomElement(City::all()),
            'school_id' => rand(1,(School::count())),
            'interest_id' => rand(1,(Interest::count())),
        ];
    }
}
