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
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->id();
            $table->integer('dni');
            $table->string('nombres');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->unsignedBigInteger('cargos_id')->nullable();
            $table->foreign('cargos_id')->references('id')->on('cargos');
            
            // $table->foreign('cargos_id')->references('id')->on('cargos');
            // $table->integer('regimen_id');
            // $table->foreign('regimen_id')->references('id')->on('regimen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajadores');
    }
};
