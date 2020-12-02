<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{

    protected $table = 'ciudades';

    protected $fillable = [
        'nombre',
        'codigo_dane',
        'observacion',
        'departamento_id',
        'estado',
        'user_created_at',
        'user_updated_at'
    ];

    public function departamento()
    {
        return $this->belongsTo('App\Departamento');
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

    public function centrales()
    {
        return $this->hasMany('App\Central');
    }

    public function usuario_creacion(){
        return $this->hasOne('App\User','id','user_created_at');
    }

    public function usuario_modificacion(){
        return $this->hasOne('App\User','id','user_updated_at');
    }

}
