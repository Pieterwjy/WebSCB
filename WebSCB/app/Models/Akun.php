<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_akun',
        'nama_akun',
        'sandi_akun',
        'hak_akses_akun',
        'status_akun'
    ];
}
