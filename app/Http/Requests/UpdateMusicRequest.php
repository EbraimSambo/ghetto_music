<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMusicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'tags' => ['required', 'string'],
            'artist' => ['required', 'string'],
        ];
    }

 
    public function messages()
    {
        return [
            'title.required' => 'O titulo da música é obrigatório.',
            'artist.required' => 'Falta colocar o nome do artista.',
            'tags.required' => 'Esqueceu de criar #Tags para está música.',
            'description.required' => 'A descrição da música é obrigatório.',
        ];
    }   
}
