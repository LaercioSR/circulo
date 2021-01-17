<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Interest;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $interests = [
            ['id' => 1, 'name' => 'Informática'],
            ['id' => 2, 'name' => 'Produção de vídeos'],
            ['id' => 3, 'name' => 'Comunicação'],
            ['id' => 4, 'name' => 'Redação'],
        ];

        foreach ($interests as $interest){
            Interest::create($interest);
        }
    }
}
