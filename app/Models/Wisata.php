<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = "wisatas";
    protected $fillable = [
        "nama_paket",
        "destinasi1",
        "destinasi2",
        "destinasi3",
        "destinasi4",
        "destinasi5",
        "mobil1",
        "mobil2",
        "mobil3",
        "mobil4",
        "harga1",
        "harga2",
        "harga3",
        "harga4",
        "kapasitas1",
        "kapasitas2",
        "kapasitas3",
        "kapasitas4",
        "gambar",
    ];
}
