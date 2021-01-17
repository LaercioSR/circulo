<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mentoring;

class MentoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mentorings = [
            [
                'id' => 1, 'title' => 'Comunicação',
                'description' => 'Saepe dolore qui excepturi nihil. Id laudantium mollitia quaerat dolor fugit nemo et. Soluta cupiditate nam at qui quo.',
                'format' => 'ONLINE',
                'mentor_id' => 1,
            ],
            [
                'id' => 2, 'title' => 'Polinômios',
                'description' => 'Saepe dolore qui excepturi nihil. Id laudantium mollitia quaerat dolor fugit nemo et. Soluta cupiditate nam at qui quo.',
                'format' => 'ONLINE',
                'mentor_id' => 5,
            ],
            [
                'id' => 3, 'title' => 'Escolas literárias',
                'description' => 'Saepe dolore qui excepturi nihil. Id laudantium mollitia quaerat dolor fugit nemo et. Soluta cupiditate nam at qui quo.',
                'format' => 'PRESENCIAL',
                'mentor_id' => 1,
            ],
            [
                'id' => 4, 'title' => 'Programação em C',
                'description' => 'Saepe dolore qui excepturi nihil. Id laudantium mollitia quaerat dolor fugit nemo et. Soluta cupiditate nam at qui quo.',
                'format' => 'ONLINE',
                'mentor_id' => 4,
            ],
            [
                'id' => 5, 'title' => 'Edição de vídeos',
                'description' => 'Saepe dolore qui excepturi nihil. Id laudantium mollitia quaerat dolor fugit nemo et. Soluta cupiditate nam at qui quo.',
                'format' => 'ONLINE',
                'mentor_id' => 2,
            ],
            [
                'id' => 6, 'title' => 'Comunicação',
                'description' => 'Saepe dolore qui excepturi nihil. Id laudantium mollitia quaerat dolor fugit nemo et. Soluta cupiditate nam at qui quo.',
                'format' => 'ONLINE',
                'mentor_id' => 3,
            ],
        ];

        foreach ($mentorings as $mentoring){
            Mentoring::create($mentoring);
        }

        // $table->unsignedBigInteger('mentor_id');
        //     $table->string('title');
        //     $table->string('description');
        //     $table->enum('format', ['ONLINE', 'PRESENCIAL']);
        //     $table->foreign('mentor_id')->references('id')->on('students');
    }
}
