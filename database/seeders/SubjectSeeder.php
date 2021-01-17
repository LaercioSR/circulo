<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            ['id' => 1, 'name' => 'Português'],
            ['id' => 2, 'name' => 'Matemática'],
            ['id' => 3, 'name' => 'Física'],
            ['id' => 4, 'name' => 'Biologia'],
            ['id' => 5, 'name' => 'Geografia'],
            ['id' => 6, 'name' => 'História'],
            ['id' => 7, 'name' => 'Química'],
        ];

        foreach ($subjects as $subject){
            Subject::create($subject);
        }
    }
}