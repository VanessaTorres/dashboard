<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pais extends Model
{

    protected $table = 'paises';

    protected $fillable = [
        'nombre',
        'codigo_dane',
        'codigo_iso',
        'estado',
        'user_created_at',
        'user_updated_at'
    ];

    public function departamentos()
    {
        return $this->hasMany('App\Departamento');
    }

    public function estadosLst(){

        return array(

            0=>'Inactivo',
            1=>'Activo',
        );
    }

    public function getEstadoAttribute($value){

        return $this->estadosLst()[$value];
    }

    public function usuario_creacion(){
        return $this->hasOne('App\User','id','user_created_at');
    }

    public function usuario_modificacion(){
        return $this->hasOne('App\User','id','user_updated_at');
    }

}
