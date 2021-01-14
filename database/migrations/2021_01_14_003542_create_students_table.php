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
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('name', 255);
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('birthdate')->nullable();
            $table->string('address', 255)->nullable();
            $table->string('phone', 12)->nullable();
            $table->json('social_medias')->nullable();
            $table->json('educations')->nullable();
            $table->json('work_experiences')->nullable();
            $table->json('organizations')->nullable();
            $table->json('achievements')->nullable();
            $table->string('specialization')->nullable();
            $table->json('skills')->nullable();
            $table->json('hobbies')->nullable();
            $table->string('CV', 20)->nullable();
            $table->string('portfolio', 20)->nullable();
            $table->string('photo', 20)->nullable();
            $table->longText('biography')->nullable();
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
