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
        return $this->hasMany('App\User', 'kode_id');
    }

    public function kode_keluarga()
    {
        return $this->belongsTo('App\Keluarga', 'kode_id');
    }
}
