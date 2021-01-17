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
            $table->float('grade_portuguese')->default(0);
            $table->float('attendance_portuguese');
            $table->float('grade_math')->default(0);
            $table->float('attendance_math')->default(100);
            $table->float('grade_history')->default(0);
            $table->float('attendance_history')->default(100);
            $table->float('grade_geography')->default(0);
            $table->float('attendance_geography')->default(100);
            $table->float('grade_chemistry')->default(0);
            $table->float('attendance_chemistry')->default(100);
            $table->float('grade_physics')->default(0);
            $table->float('attendance_physics')->default(100);
            $table->float('grade_biology')->default(0);
            $table->float('attendance_biology')->default(100);
            $table->float('grade_philosophy')->default(0);
            $table->float('attendance_philosophy')->default(100);
            $table->float('grade_sociology')->default(0);
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
