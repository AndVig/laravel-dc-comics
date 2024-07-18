<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use illuminate\validation\Rule;

class UpdateComicRequest extends FormRequest
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
            'title' => ['required', 'min:3', 'max:50', 'string', Rule::unique('comics')->ignore($this->comic)],
            'price' => 'required|max:80|numeric|decimal:0,2',
            'type' => 'required|min:5|max:50|string',
            'description' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve contenere minimo 3 caratteri',
            'title.max' => 'Il titolo deve contenere massimo 50 caratteri',
            'title.string' => 'Il titolo deve essere una stringa',
            'title.unique' => 'Questo titolo esiste già',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.max' => 'Il prezzo è troppo alto (max 80)',
            'price.numeric' => 'il prezzo deve essere un numero',
            'price.decimal' => 'Il prezzo può avere al massimo due cifre decimali',
            'type.required' => 'Il tipo è obbligatorio',
            'type.min' => 'Il tipo deve contenere minimo 5 caratteri',
            'type.max' => 'Il tipo deve contenere massimo 25 caratteri',
            'type.string' => 'Il tipo deve essere una stringa',
            'description.required' => 'La descrizione è obbligatoria',
            'description.min' => 'La descrizione deve contenere minimo 5 caratteri',
            'description.string' => 'La descrizione deve essere una stringa'
        ];
    }
}
