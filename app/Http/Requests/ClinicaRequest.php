<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class ClinicaRequest extends FormRequest
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
            'menu' => [
                'required',
                Rule::in(['Cadastros','Movimentos','Consultas','Impressões','Configurações'])
            ],
            'title' => 'required',
            'iframe' => 'required'
        ];
    }
}
