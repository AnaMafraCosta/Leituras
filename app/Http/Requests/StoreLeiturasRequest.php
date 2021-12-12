<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeiturasRequest extends FormRequest
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
            'titulo' => 'required',
            'autor' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'titulo.required'=> 'O título é obrigatório',
            'autor.required'=> 'O autor é obrigatório'
        ];
    }
}
