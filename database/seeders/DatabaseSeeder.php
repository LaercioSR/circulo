<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Course;
use App\Models\Job;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use App\Models\Interest;
use App\Models\Mentoring;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            InterestSeeder::class,
            SubjectSeeder::class,
        ]);
        
        User::factory()->count(15)->create();
        School::factory()->count(3)->create();
        Student::factory()->count(6)->create();
        Company::factory()->count(4)->create();
        Job::factory()->count(6)->create();
        Course::factory()->count(15)->create();
        Mentoring::factory()->count(8)->create();
    }
}
