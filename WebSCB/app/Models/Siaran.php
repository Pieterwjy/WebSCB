<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_siaran',
        'id_akun',
        'tanggal_siaran',
        'embed_siaran',
        'status_siaran'
    ];
}
