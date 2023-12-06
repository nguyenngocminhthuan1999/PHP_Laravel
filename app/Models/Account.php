<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {
    protected $primaryKey  = 'user_name';
    protected $table  = 'account';
    public $timestamps = false;
    protected $fillable = [
        'user_name',
        'email',
        'password',
        'full_name',
        'phone',
        'address',
        'level',
        'country',
        'avatar',
        'status',
    ];
}

?>