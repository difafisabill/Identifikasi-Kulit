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
        Schema::create('clinics', function (Blueprint $table) {
            $table->id('id_klinik');
            $table->string('no_str');
            // $table->string('id_dokter');
            // $table->foreignId('no_str')->constrained();
            $table->foreign('no_str')->references('no_str')->on('doctors');
            $table->string('tempat_praktik');
            $table->date('tanggal')->nullable();
            $table->string('sesi')->nullable();
            $table->string('waktu')->nullable();
            $table->bigInteger('biaya')->nullable();
            $table->string('Alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinics');
    }
};
