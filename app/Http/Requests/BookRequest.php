<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class BookRequest extends FormRequest
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
            'title' => 'required',
            'pages' => 'required|numeric',
            'price' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
         'title.required' => 'Coloque o título!',
         'pages.numeric' => 'Coloque um numero de páginas.',
         'price.numeric' => 'Coloque um Preço para o livro.',
        ];
    }
}