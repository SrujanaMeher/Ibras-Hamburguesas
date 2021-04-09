<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = ['u_name', 'u_email', 'u_password', 'u_address', 'user'];
}
