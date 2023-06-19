<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'Pengumuman';
    use HasFactory;
    protected $fillable = [
        'id',
        'id_akun',
        'tanggal_pengumuman',
        'deskripsi_pengumuman'
    ];
}
