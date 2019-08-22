<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PharmaRequest extends FormRequest
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
          'nom' => 'required|string',
          'prenom'=>'required|string',
          'tel' => 'required|numeric|distinct',
          'email' => 'required|email|distinct',
          'login'=>'required|distinct|string|min:4',
          'psw'=>'required|string|min:4',
          'photo'=>'mimes:jpeg,bmp,png,jpg'

        ];
    }
}
