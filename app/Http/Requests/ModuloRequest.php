<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModuloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                   => 'required',
            'icon'             => 'required',
            'state'                => 'required',
            //'url'                   => 'required',
            'paquete_id' => 'required',
            'observation' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name'                   => 'Nombre',
            'icon'             => 'Icono',
            'state'                => 'Estado',
            //'url'                   => 'Url',
            'paquete_id' => 'Paquetes',
            'observation' => 'Observcaión'
        ];
    }
}
