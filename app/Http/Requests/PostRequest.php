<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'url' => ['nullable', 'string'],
            'content' => ['required', 'string']
        ];
    }
    
    public function messages()
    {
        return [
            'title.required' => 'O campo título é obrigatorio',
            'title.string' => 'o título precisa ser uma string',
            'title.string' => 'A URL precisa ser uma string',
            'content.required' => 'O campo conteudo é obrigatorio',
            'content.string' => 'o conteudo precisa ser uma string'
        ];
    }
}
