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
            'autor' => 'required',
            'genero' => 'required',
            'paginas' => 'required',
            'editora' => 'required',
            'idioma' => 'required',
            'resenha' => 'required',
            'frase' => 'required',
            'nota' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'titulo.required'=> 'O título é obrigatório',
            'autor.required'=> 'O autor é obrigatório',
            'genero.required'=> 'O gênero é obrigatório',
            'paginas.required'=> 'O número de páginas é obrigatório',
            'editora.required'=> 'A editora é obrigatório',
            'idioma.required'=> 'O idioma é obrigatório',
            'resenha.required'=> 'A resenha é obrigatório',
            'frase.required'=> 'A citação é obrigatório',
            'nota.required'=> 'A nota é obrigatório'
        ];
    }
}
