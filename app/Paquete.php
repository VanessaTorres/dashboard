<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Paquete extends Model
{
    //

    protected $fillable = [
        'id',
        'name',
        'url',
        'icon',
        'observation',
        'state',
        'user_created_at',
        'user_updated_at'
    ];

    public function modulos()
    {
        return $this->hasMany('App\Modulo');
    }

    public function statesLst(){

        return array(

            0=>'Inactivo',
            1=>'Activo',
        );
    }

    public function getStateAttribute($value){

        return $this->statesLst()[$value];
    }

    public function usuario_creacion(){
        return $this->hasOne('App\User','id','user_created_at');
    }

    public function usuario_modificacion(){
        return $this->hasOne('App\User','id','user_updated_at');
    }
}
