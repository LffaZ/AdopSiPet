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
        Schema::create('pet_details', function (Blueprint $table) {
            $table->id('kd');
            $table->enum('jenkel', ['betina', 'jantan']);
            $table->text('deskripsi');
            $table->string('warna');
            $table->integer('berat');
            $table->integer('panjang');
            $table->integer('usia');
            $table->string('karakter', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_details');
    }
};
