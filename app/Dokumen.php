<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $table = 'dokumen';

    protected $primaryKey = 'id';

    public function dokumen()
    {
        return $this->belongsTo('App\Dokumen', 'kategori_id');
    }

    public function dokumenUser()
    {
        return $this->belongsTo('App\Dokumen', 'kategori_id');
    }
}
