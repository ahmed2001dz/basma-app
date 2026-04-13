<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->enum('gender', ['male', 'female']);


            $table->string('address');
            $table->string('phone_number')->unique();
            $table->string('email')->unique();


            $table->string('nin')->unique(); // رقم التعريف الوطني (NIN)
            $table->string('registration_number')->unique();
            $table->foreignId('specialty_id')->constrained()->onDelete('cascade');
            $table->string('level');


            $table->unsignedInteger('wilaya_id');
            $table->unsignedInteger('commune_id');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
