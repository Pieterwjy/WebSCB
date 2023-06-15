<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class userAkun extends Model
{
    use HasFactory;
    protected $table = 'User';
    protected $primaryKey = 'user_id';   
    protected $fillable = ['user_id','user_name','password','role','status'];
    public $incrementing    = false;
    public $timestamps      = false;
}
