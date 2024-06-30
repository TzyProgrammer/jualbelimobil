<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilFavorite extends Model
{
    use HasFactory;
    protected $table = 'mobil_favorit';
    protected $fillable = ['id_pembeli', 'kode_mobil'];
    protected $guarded = ['id_favorit'];
    public $timestamps = false;
}
