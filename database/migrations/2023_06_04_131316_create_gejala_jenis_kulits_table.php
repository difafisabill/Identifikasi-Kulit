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
        Schema::create('gejala_jenis_kulit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_kulit_id_JK');
            $table->foreign('jenis_kulit_id_JK')->references('id_JK')->on('jenis_kulits')->onDelete('cascade');
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
        Schema::dropIfExists('gejala_jenis_kulits');
    }
};
