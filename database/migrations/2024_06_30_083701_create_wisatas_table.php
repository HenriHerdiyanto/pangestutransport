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
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket')->nullable();
            $table->string('destinasi1')->nullable();
            $table->string('destinasi2')->nullable();
            $table->string('destinasi3')->nullable();
            $table->string('destinasi4')->nullable();
            $table->string('destinasi5')->nullable();
            $table->string('mobil1')->nullable();
            $table->string('mobil2')->nullable();
            $table->string('mobil3')->nullable();
            $table->string('mobil4')->nullable();
            $table->integer('harga1')->nullable();
            $table->integer('harga2')->nullable();
            $table->integer('harga3')->nullable();
            $table->integer('harga4')->nullable();
            $table->string('kapasitas1')->nullable();
            $table->string('kapasitas2')->nullable();
            $table->string('kapasitas3')->nullable();
            $table->string('kapasitas4')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisatas');
    }
};
