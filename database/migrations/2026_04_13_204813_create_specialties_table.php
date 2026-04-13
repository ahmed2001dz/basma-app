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
        Schema::create('specialties', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // رمز التخصص (مثلاً: INF0701)
            $table->string('name_ar'); // اسم التخصص بالعربية (مثلاً: تقني سامي في المعلوماتية)
            $table->string('name_en')->nullable(); // اسم التخصص بالفرنسية
            $table->string('branch'); // الشعبة المهنية (مثلاً: إعلام آلي، إدارة وتسيير)
            $table->enum('level', ['TS', 'T', 'CAP', 'CMP']); // مستوى التأهيل (تقني سامي، تقني، إلخ)
            $table->integer('duration_months')->default(30); // مدة التكوين بالأشهر
            $table->boolean('is_active')->default(true); // متاح للتسجيل حالياً أم لا
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialties');
    }
};
