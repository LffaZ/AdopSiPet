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
        Schema::create('pet_photos', function (Blueprint $table) {
            $table->id('kd');
            $table->unsignedBigInteger('kd_pet');
            $table->string('alt', 255);
            $table->string('foto', 500);
            $table->timestamps();
            
            $table->foreign('kd_pet')->references('kd')->on('pets')->onUpdate('cascade')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_photos');
    }
};
