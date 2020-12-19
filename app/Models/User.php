<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "tb_user";
    protected $fillable = [
        'login',
        'passwordhash',
        'fullname',
        'cpf'
    ];
    public $timestamps = false;
}
