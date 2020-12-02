<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AportesDistribucionDetalleRequest extends FormRequest
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
            'distAporte' => 'required',
            'ciudad' => 'required',
            'tipo_ayuda' => 'required',
            'tipo_ayuda_cant' => 'required',
            'valorxuni' => 'required',
            'subtotal' => 'required',
            'responsable_nombre' => 'required',
            'responsable_correo' => 'required',
            'responsable_celular' => 'required'

        ];
    }

    public function attributes()
    {
        return [
            'distAporte' => 'Distribución Aporte',
            'ciudad' => 'Ciudad',
            'tipo_ayuda' => 'Tipo Ayuda',
            'tipo_ayuda_cant' => 'Cantidad',
            'valorxuni' => 'Valor X 1',
            'subtotal' => 'Subtotal',
            'responsable_nombre' => 'Nombre Responsable',
            'responsable_correo' => 'Correo Responsable',
            'responsable_celular' => 'Celular Responsable',
        ];
    }


}
