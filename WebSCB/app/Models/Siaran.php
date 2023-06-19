<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siaran extends Model
{
    protected $table = 'Siaran';
    use HasFactory;

    protected $fillable = [
        'id',
        'id_akun',
        'tanggal_siaran',
        'embed_siaran',
        'status_siaran'
    ];
}
