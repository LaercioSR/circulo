<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('year', 4);
            $table->enum('school_year', ['1_ANO', '2_ANOR', '3_ANO', '4_ANO']);
            $table->boolean('confirmed_school')->default(false);
            $table->float('grade_portuguese');
            $table->float('attendance_portuguese');
            $table->float('grade_math');
            $table->float('attendance_math');
            $table->float('grade_history');
            $table->float('attendance_history');
            $table->float('grade_geography');
            $table->float('attendance_geography');
            $table->float('grade_chemistry');
            $table->float('attendance_chemistry');
            $table->float('grade_physics');
            $table->float('attendance_physics');
            $table->float('grade_biology');
            $table->float('attendance_biology');
            $table->float('grade_philosophy');
            $table->float('attendance_philosophy');
            $table->float('grade_sociology');
            $table->float('attendance_sociology');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
