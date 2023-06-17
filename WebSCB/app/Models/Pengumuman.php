<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pengumuman',
        'id_akun',
        'tanggal_pengumuman',
        'deskripsi_pengumuman'
    ];
}
