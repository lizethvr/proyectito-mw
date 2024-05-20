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
        Schema::create('mueble_tipo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mueble_id');
            $table->unsignedBigInteger('tipo_id');
            $table->timestamps();
            $table->foreign('mueble_id')->references('id')->on('muebles')->onDelete('cascade');
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mueble_tipo');
    }
};
