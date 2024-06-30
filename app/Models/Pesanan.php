<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $fillable = ['id_pembeli', 'konfirmasi_pesanan', 'tanggal_pesan', 'kode_mobil', 'metode_pengiriman'];
    protected $guarded = ['kode_pesanan'];
    public $timestamps = false;
}
