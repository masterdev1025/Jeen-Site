<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'userFirst',
        'userLast',
        'userPhone',
        'userPosition',
        'userAddress1',
        'userAddress2',
        'userCity',
        'userState',
        'userPostal',
        'userCountry',
        'registerDate',
        'registerCurrentCustomer',
        'approvalDate',
        'userStatus',
        'notes',
        'companyType',
        'companyProductUse'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
