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
          'name' => 'required|string|max:255',
          'prenom'=>'required|string|max:255',
          'tel' => 'required|numeric|distinct',
          'date_nais' => 'required|date',
          'photo'=>'mimes:jpeg,bmp,png,jpg', //|max:2048
          'login'=>'required|string|min:4',
          'email' =>'required|string|email|max:255',
          'password' => 'required|string|min:8|confirmed',

        ];
    }
}
