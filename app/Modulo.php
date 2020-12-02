<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Modulo extends Model
{


    protected $fillable = [
        'name',
        'url',
        'paquete_id',
        'icon',
        'observation',
        'state',
        'position',
        'user_created_at',
        'user_updated_at'
    ];

    public function paquete()
    {
        return $this->belongsTo('App\Paquete');
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

    public function permisos()
    {
        return $this->hasMany('Spatie\Permission\Models\Permission');
    }

    public function usuario_creacion(){
        return $this->hasOne('App\User','id','user_created_at');
    }

    public function usuario_modificacion(){
        return $this->hasOne('App\User','id','user_updated_at');
    }
}
