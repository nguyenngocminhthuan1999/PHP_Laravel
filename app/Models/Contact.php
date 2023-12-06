<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {
    protected $primaryKey  = 'id';
    protected $table  = 'contact';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'time',
    ];
}

?>