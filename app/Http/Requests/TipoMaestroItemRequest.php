<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoMaestroItemRequest extends FormRequest
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
            'nombre' => 'required',
            'numitem' => 'required',
            'observacion' => 'required',
            'tipomaestro_id' => 'required',
            'estado' => 'required'

        ];
    }

    public function attributes()
    {
        return [
            'nombre'                   => 'Nombre',
            'numitem' => 'Numero Item',
            'observacion'  => 'Observación',
            'tipomaestro_id' => 'Tipo Maestro',
            'estado' => 'Estado'
        ];
    }
}
