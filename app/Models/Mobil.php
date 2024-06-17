<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $fillable = ['nama_mobil', 'kode_merek', 'harga_mobil', 'gambar_mobil', 'deskripsi_mobil'];
    protected $guarded = ['kode_mobil'];
    public $timestamps = false;
}
