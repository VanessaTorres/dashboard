<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AportesDistribucionRequest extends FormRequest
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
            'aportante' => 'required',
            'gestor_ayuda' => 'required',
            'fecha_aporte' => 'required|date',
            'hora_aporte' => 'required|date_format:H:i',
            'aportes_num' => 'required',
            'estado' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'aportante' => 'Aportante',
            'gestor_ayuda' => 'Gestores de Ayuda',
            'fecha_aporte' => 'Fecha Aporte',
            'hora_aporte' => 'Hora Aporte',
            'aportes_num' => 'Aportes',
            'estado' => 'Estado',
        ];
    }
}
