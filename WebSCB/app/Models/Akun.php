<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Akun extends Authenticatable
{
    protected $table = 'Akun';
    use HasFactory;

    protected $fillable = [
        'id',
        'username',
        'password',
        'hak_akses_akun',
        'status_akun'
    ];
}
