<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model {
    protected $primaryKey  = 'id';
    protected $table  = 'plane';
    public $timestamps = false;
    protected $fillable = [
        'from',
        'to',
        'airline_company',
        'plane_id',
    ];
}

?>