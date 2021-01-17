<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_birth')->nullable();
            $table->string('registration_number')->nullable();
            $table->enum('school_year', ['1º ano', '2º ano', '3º ano', '4º ano', 'CONCLUIU']);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('city_id')->constrained()->onDelete('cascade');
            $table->foreignId('school_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('interest_id')->nullable()->constrained();
            $table->foreignId('subject_id')->nullable()->constrained();
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
        Schema::dropIfExists('students');
    }
}
