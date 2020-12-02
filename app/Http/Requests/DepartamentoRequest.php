<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartamentoRequest extends FormRequest
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
            'codigo_dane' => 'required',
            'observacion' => 'required',
            'pais_id' => 'required',
            'estado' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'nombre'                   => 'Nombre',
            'codigo_dane'             => 'Codigo Dane',
            'observacion'                => 'Observación',
            'pais'                     => 'Pais',
            'estado'                   => 'Estado'
        ];
    }
}
