<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GestorAyudaRequest extends FormRequest
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
            'tipo_gestor' => 'required',
            'nombre' => 'required',
            'contacto' => 'required',
            'pais' => 'required',
            'ciudad' => 'required',
            'email' => 'required'

        ];

    }

    public function attributes()
    {
        return [
            'tipo_gestor' => 'Tipo Gestor',
            'nombre' => 'Nombre',
            'contacto' => 'Responsable',
            'pais' => 'Pais',
            'ciudad' => 'Ciudad',
            'email' => 'Email'
        ];
    }
}
