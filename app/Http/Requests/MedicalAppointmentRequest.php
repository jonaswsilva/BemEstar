<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MedicalAppointmentRequest extends Request
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
            'hour' => 'required',
        ];
    }

    public function messages(){
      return [
          'term.required' => 'Campo obrigatório!',
          'date.required' => 'O campo data é obrigatório!',
          'hour.required' => 'O campo hora é obrigatório!',
      ];
    }
}
