<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens, HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status','api_token', 'kode_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function user_dok()
    {
        return $this->hasMany('App\User', 'user_id');
    }

    public function user_album()
    {
        return $this->hasMany('App\User', 'user_id');
    }

    public function user_diari()
    {
        return $this->hasMany('App\User', 'user_id');
    }

    public function user_profile()
    {
        return $this->hasOne('App\User', 'user_id');
    }

    public function kode()
    {
        return $this->belongsTo('App\KodeKeluarga', 'kode_id');
    }

    public function user_keluarga()
    {
        return $this->hasMany('App\User', 'user_id');
    }
    

}
