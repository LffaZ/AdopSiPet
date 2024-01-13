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
        Schema::create('pets', function (Blueprint $table) {
            $table->id('kd');
            $table->enum('category', ['cat', 'dog', 'rabbit', 'hamster', 'bird', 'fish', 'others']);
            $table->enum('sts_kepemilikan', ['liar', 'pribadi']);
            $table->integer('harga');
            $table->timestamps();

            $table->foreignId('kd_petdetail')->references('kd')->on('pet_details');
            $table->foreignId('kd_pethealth')->references('kd')->on('pet_healths');
            $table->foreignId('id_petcontributor')->references('id')->on('pet_contributors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
