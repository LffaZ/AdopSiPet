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
            $table->unsignedBigInteger('id_petcontributor');
            $table->string('nama');
            $table->enum('category', ['cat', 'dog', 'rabbit', 'hamster', 'bird', 'fish', 'others']);
            $table->enum('stts_kepemilikan', ['liar', 'pribadi']);
            $table->integer('harga');
            $table->foreign('id_petcontributor')->references('id')->on('pet_contributors')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();

            
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
