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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->unsignedBigInteger('id_pasient');
            $table->foreign('id_pasient')->references('id_pasient')->on('pasients');
            $table->string('no_str');
            $table->foreign('no_str')->references('no_str')->on('doctors');
            $table->unsignedBigInteger('id_perwatan');
            $table->foreign('id_perwatan')->references('id_perwatan')->on('perawatan');
            $table->unsignedBigInteger('id_klinik');
            $table->foreign('id_klinik')->references('id_klinik')->on('clinics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
