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
        Schema::create('skintype', function (Blueprint $table) {
            $table->id();
            $table->string("skin_type", 50);
            $table->string('photo')->nullable();
            $table->text("causes")->nullable();
            $table->text("solution")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skintype');
    }
};
