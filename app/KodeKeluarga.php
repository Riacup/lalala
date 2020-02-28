<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KodeKeluarga extends Model
{
    protected $table = 'kode_keluarga';

    protected $primaryKey = 'id_kode';

    protected $fillable = [
        'kode', 
    ];

    public function kode_user()
    {
        return $this->hasMany('App\KodeKeluarga', 'kode_id');
    }

    public function keluarga_kode()
    {
        return $this->belongsTo('App\KodeKeluarga', 'user_id');
    }
}
