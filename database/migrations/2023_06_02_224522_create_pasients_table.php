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
        Schema::create('pasients', function (Blueprint $table) {
            $table->id('id_pasient');
            $table->string('nama_pasient');
            $table->string('no_str');
            $table->foreign('no_str')->references('no_str')->on('doctors');
            $table->unsignedBigInteger('id_klinik');
            $table->foreign('id_klinik')->references('id_klinik')->on('clinics');
            $table->unsignedBigInteger('id_sesi');
            $table->foreign('id_sesi')->references('id_sesi')->on('sesi');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasients');
    }
};
