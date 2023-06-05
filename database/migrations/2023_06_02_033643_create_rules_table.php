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
        // Schema::create('rules', function (Blueprint $table) {
        //     $table->string('kd_aturan');
        //     $table->primary('kd_aturan');
        //     $table->string('kd_gjl');
        //     $table->foreign('kd_gjl')->references('kd_gejala')->on('gejalas');
        //     $table->string('kd_JK');
        //     $table->foreign('kd_JK')->references('id_JK')->on('jenis_kulits');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rules');
    }
};
