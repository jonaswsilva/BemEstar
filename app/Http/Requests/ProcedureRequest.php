<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProcedureRequest extends Request
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
          'patient_id' => 'required',
          'date' => 'required',
          'price' => 'required',
          'observation' => 'required',
      ];
  }

  public function messages(){
    return [
        'patient_id.required' => 'Campo obrigatório!',
        'date.required' => 'O campo data é obrigatório!',
        'price.required' => 'O campo é obrigatório!',
        'observation.required' => 'O campo é obrigatório!',
    ];
  }
}
