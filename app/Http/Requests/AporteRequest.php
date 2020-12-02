<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AporteRequest extends FormRequest
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
            'gestor_ayuda' => 'required',
            'promotor' => 'required',
            'fecha_aporte' => 'required|date',
            'aporte' => 'required|numeric',
            'trm' => 'required',

        ];
    }

    public function attributes()
    {
        return [
            'gestor_ayuda' => 'Gestor Ayuda',
            'promotor' => 'Promotor',
            'fecha_aporte' => 'Fecha Aporte',
            'aporte' => 'Aportes Monetarios',
            'trm' => 'TRM',

        ];
    }
}
