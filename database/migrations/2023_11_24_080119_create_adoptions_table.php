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
        Schema::create('adoptions', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('total_nominal');
            $table->string('mtd_bayar', 50);
            $table->enum('stts_pengiriman', ['dikemas', 'dikirim', 'sampai']);

            $table->foreignId('id_pengadopsi')->references('id')->on('users');
            $table->foreignId('id_penyedia')->references('id')->on('pet_contributors');
            $table->timestamps();

            // revisi terbaru
            $table->foreignId('kd_pet')->references('kd')->on('pets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoptions');
    }
};
