<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';

    public function profile()
    {
        return $this->belongsTo('App\Profile', 'user_id');
    }
}
