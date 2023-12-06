<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model {
    protected $primaryKey  = 'id';
    protected $table  = 'bus';
    public $timestamps = false;
    protected $fillable = [
        'bus_code',
        'carriage_way',
        'distance',
        'operating_time',
        'ride_time',
        'bus_line_frequency',
        'bus_id',
    ];
}

?>