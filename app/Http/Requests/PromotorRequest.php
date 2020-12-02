<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromotorRequest extends FormRequest
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
            'responsable_name' => 'required',
            'responsable_email' => 'required',
            'cargo' => 'required',
            'pais' => 'required',
            'campana' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'responsable_name' => 'Nombre del responsable',
            'responsable_email' => 'Email del responsable',
            'cargo' => 'Cargo',
            'pais' => 'Pais',
            'campana' => 'Campaña',
        ];
    }
}
