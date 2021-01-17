<?php

namespace Database\Factories;

use App\Models\Mentoring;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class MentoringFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mentoring::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text,
            'mentor_id' => rand(1,(Student::count())),
            'format' => $this->faker->randomElement($array = array ('ONLINE', 'PRESENCIAL')),
        ];
    }
}
