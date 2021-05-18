<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordResetToken extends Model
{

    public $table = 'password_reset_tokens';
    public $fillable = [
        'id',
        'email',
        'token'
    ];
}
