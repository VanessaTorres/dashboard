<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrmRequest extends FormRequest
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
            'moneda' => 'required',
            'valor' => 'required',
            'fecha_trm' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'moneda' => 'Moneda',
            'valor'  => 'Valor',
            'fecha_trm' => 'Fecha TRM'
        ];
    }
}
