<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProfessionalRequest extends Request
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
            'name'          => 'required|min:3',
            'lastname'      => 'required',
            'rg'            => 'required',
            'cpf'           => 'required|cpf',
            'sex'           => 'required',
            'phone'         => 'required',
            'email'         => 'required|email',
            'cep'           => 'required',
            'street'        => 'required',
            'number'        => 'required',
            'neighborhood'  => 'required',
            'crm'           => 'required',
            'password'      => 'required|min:5|confirmed',


        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'O campo nome é obrigatório.',
            'name.min'              => 'O campo nome deve ter mais de 6 caracteres.',
            'lastname.required'     => 'O campo sobrenome é obrigatório.',
            'rg.required'           => 'O campo rg é obrigatório.',
            'cpf.required'          => 'O campo cpf é obrigatório.',
            'sex.required'          => 'O campo sexo é obrigatório.',
            'phone.required'        => 'O campo celular é obrigatório.',
            'email.required'        => 'O campo e-mail é obrigatório.',
            'cep.required'          => 'O campo cep é obrigatório.',
            'street.required'       => 'O campo rua é obrigatório.',
            'number.required'       => 'O campo N° é obrigatório.',
            'neighborhood.required' => 'O campo bairro é obrigatório.',
            'crm.required'          => 'O campo crm é obrigatório.',

        ];
    }
}
