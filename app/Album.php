<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';

    protected $primaryKey = 'id';

    public function album()
    {
        return $this->belongsTo('App\Album', 'user_id');
    }

    public function kat_album()
    {
        return $this->belongsTo('App\Album', 'user_id');
    }
}
