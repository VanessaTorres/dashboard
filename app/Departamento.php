<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Departamento extends Model
{

    protected $fillable = [
        'nombre',
        'codigo_dane',
        'observacion',
        'pais_id',
        'estado',
        'user_created_at',
        'user_updated_at'
    ];

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }

    public function estadoLst(){

        return array(

            0=>'Inactivo',
            1=>'Activo',
        );
    }

    public function getEstadoAttribute($value){

        return $this->estadoLst()[$value];
    }

    public function ciudades()
    {
        return $this->hasMany('App\Ciudad');
    }

    public function usuario_creacion(){
        return $this->hasOne('App\User','id','user_created_at');
    }

    public function usuario_modificacion(){
        return $this->hasOne('App\User','id','user_updated_at');
    }

}
