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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil')->nullable();
            $table->string('harga')->nullable();
            $table->string('jenis_kendaraan')->nullable();
            $table->integer('banyak_kursi')->nullable();
            $table->enum('jenis_mobil', ['autometic', 'manual'])->nullable();
            $table->string('lp1')->nullable();
            $table->string('lp2')->nullable();
            $table->string('lp3')->nullable();
            $table->string('ms1')->nullable();
            $table->string('ms2')->nullable();
            $table->string('ms3')->nullable();
            $table->string('msb1')->nullable();
            $table->string('msb2')->nullable();
            $table->string('msb3')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
