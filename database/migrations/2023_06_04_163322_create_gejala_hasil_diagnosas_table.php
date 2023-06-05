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
        Schema::create('gejala_hasil_diagnosa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasil_diagnosa_id');
            $table->foreign('hasil_diagnosa_id')->references('id')->on('hasil_diagnosa')->onDelete('cascade');
            $table->unsignedBigInteger('gejala_kd_gejala');
            $table->foreign('gejala_kd_gejala')->references('kd_gejala')->on('gejalas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gejala_hasil_diagnosas');
    }
};
