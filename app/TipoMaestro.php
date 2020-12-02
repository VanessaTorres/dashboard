<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TipoMaestro extends Model
{

    protected $table = 'tipomaestro';

    protected $fillable = [
        'nombre',
        'observacion',
        'estado',
        'user_created_at',
        'user_updated_at'
    ];

    public function estadosLst(){

        return array(

            0=>'Inactivo',
            1=>'Activo',
        );
    }

    public function getEstadoAttribute($value){

        return $this->estadosLst()[$value];
    }

    public function tiposmaestroitem()
    {
        return $this->hasMany('App\TipoMaestroItem','tipomaestro_id');
    }

    public function usuario_creacion(){
        return $this->hasOne('App\User','id','user_created_at');
    }

    public function usuario_modificacion(){
        return $this->hasOne('App\User','id','user_updated_at');
    }

}
