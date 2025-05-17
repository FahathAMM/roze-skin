<?php

namespace App\Models\Customer;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $fillable = [
        'password',
        'name',
        'mobile',
        'address',
        'city',
        'postal_code',
        'country',
        'is_default',
    ];

    protected $hidden = ['password'];

    public function getAuthIdentifierName()
    {
        return 'mobile'; // use mobile instead of email
    }
}
