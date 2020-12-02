<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected $fqdn = null;

    public function __construct()
    {
        //$this->fqdn = sprintf('%s.%s', $data['fqdn'], env('APP_DOMAIN'));
    }

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
            //
            'name' => 'required|string|max:255',
            'phone' => 'required',
            'id' => 'required|string|max:20|unique:tenants',

        ];
    }
}
