<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bridges extends Model {
    protected $primaryKey  = 'id';
    protected $table  = 'bridges';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'country_id',
        'tall',
        'long',
        'opened',
        'description',
        'geolocation',
        'file',
        'category_id',
    ];
}

?>