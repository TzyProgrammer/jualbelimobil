<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerekMobil extends Model
{
    use HasFactory;
    protected $table = 'merek_mobil';
    protected $fillable = ['merek', 'gambar'];
    protected $guarded = ['kode_merek'];
    public $timestamps = false;
}
