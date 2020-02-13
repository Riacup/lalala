<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diari extends Model
{
    protected $table = 'diari';
    
    protected $primaryKey = 'id';

    public function diari()
    {
        return $this->belongsTo('App\Diari', 'user_id');
    }
}
