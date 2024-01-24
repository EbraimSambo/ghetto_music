<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMusicRequest extends FormRequest
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
            'path_cover' => ['required', 'string'],
            'tags' => ['required', 'string'],
            'artist' => ['required', 'string'],
            'path_cover' => ['required', 'file','mimes:jpeg,png,jpg','max:2048'],
            'path_music' => ['required','file','mimes:mp3,mp4,wav','max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O titulo da música é obrigatório.',
            'artist.required' => 'Falta colocar o nome do artista.',
            'path_cover.required' => 'Esqueceu de selecionar uma imagem.',
            'tags.required' => 'Esqueceu de criar #Tags para está música.',
            'description.required' => 'A descrição da música é obrigatório.',
            'path_music.required' => 'Esqueceu de selecionar uma música',
            'path_music.file' => 'O arquivo enviado deve ser uma música.',
            'path_music.mimes' => 'A música deve ser do tipo: mp3, wav.',
            'path_cover.file' => 'O arquivo enviado deve ser uma música.',
            'path_cover.mimes' => 'A música deve ser do tipo: png, jpeg, jpg.',
            'path_cover.max' => 'A capa não pode ter mais de 2MB.',
        ];
    }
}
