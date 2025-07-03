<?php

namespace App\Models\Customer;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $fillable = [
        'first_name',
        'last_name',
        'name',
        'email',
        'city',
        'postal_code',
        'mobile',
        'password',
        'address',
        'country',
        'description',
        'is_default',
    ];

    protected $hidden = ['password'];

    protected $casts = [
        'is_default' => 'boolean',
    ];

    public function getAuthIdentifierName()
    {
        return 'mobile'; // use mobile instead of email
    }
}
