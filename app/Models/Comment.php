<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
    protected $primaryKey  = 'id';
    protected $table  = 'comment';
    public $timestamps = false;
    protected $fillable = [
        'time',
        'cmt', 
        'bridge_id',
        'account_id',
    ];
}

?>