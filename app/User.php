<?php

namespace App;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_created_at',
        'user_updated_at'
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

    public function usuariodatosterceroitem()
    {
        return $this->hasOne('App\UsuarioDatosTerceroItem','user_id');
    }

    public function usuario_creacion(){
        return $this->hasOne('App\User','id','user_created_at');
    }

    public function usuario_modificacion(){
        return $this->hasOne('App\User','id','user_updated_at');
    }


}
