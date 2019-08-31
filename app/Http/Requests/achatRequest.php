<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class achatRequest extends FormRequest
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
            
            'numf' => 'required|exists:Fournisseurs,id',
            'med' => 'required',
            'datefab' => 'required',
            'prix' => 'required',
            'qtachat' => 'required'


        ];
    }
}
