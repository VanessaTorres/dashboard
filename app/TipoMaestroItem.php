<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TipoMaestroItem extends Model
{

    protected $table = 'tipomaestroitem';

    protected $fillable = [
        'nombre',
        'numitem',
        'observacion',
        'estado',
        'tipomaestro_id',
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

    public function tipomaestro()
    {
        return $this->belongsTo('App\TipoMaestro');
    }

    public function user()
    {
        return $this->belongsTo('App\UsuarioDatosTerceroItem','tipodocumento_id');
    }

    public function usuario_creacion(){
        return $this->hasOne('App\User','id','user_created_at');
    }

    public function usuario_modificacion(){
        return $this->hasOne('App\User','id','user_updated_at');
    }

}
