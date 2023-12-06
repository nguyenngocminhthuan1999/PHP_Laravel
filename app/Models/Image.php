<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {
    protected $primaryKey  = 'id';
    protected $table  = 'image';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'image_id',
    ];
}

?>