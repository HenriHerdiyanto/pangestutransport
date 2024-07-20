<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = "mobils";
    protected $fillable = [
        "nama_mobil",
        "harga_mobil",
        "jenis_kendaraan",
        "banyak_kursi",
        "jenis_mobil",
        "lp1",
        "lp2",
        "lp3",
        "ms1",
        "ms2",
        "ms3",
        "msb1",
        "msb2",
        "msb3",
        "gambar",
    ];
}
