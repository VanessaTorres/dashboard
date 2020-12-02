<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //

    protected $table = 'permissions';

    protected $fillable = [
        'id',
        'name',
        'guard_name',
        'modulo_id',
    ];

    public function modulo()
    {
        return $this->belongsTo('App\Modulo');
    }
}
