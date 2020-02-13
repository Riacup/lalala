<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriAlbum extends Model
{
    protected $table = 'kategori_album';

    protected $primaryKey = 'id_album';

    public function kategori_album()
    {
        return $this->hasMany('App\KategoriDokumen', 'kategori_id');
    }
}
