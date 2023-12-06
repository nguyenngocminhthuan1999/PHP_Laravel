<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model {
    protected $primaryKey  = 'id';
    protected $table  = 'level';
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];
}

?>