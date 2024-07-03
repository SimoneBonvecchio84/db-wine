<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWineRequest extends FormRequest
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
            'winery' => ['required', 'min:5'],
            'wine' => ['required'],
            'rating' => ['nullable'],
            'location' => ['required', 'min:10'],
            'poster' => ['nullable'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages() {
        return [
            'winery' => 'Winery non può essere vuoto',
            'winery.min' => 'Minimo 5 caratteri',
            'wine' => 'Wine non può essere vuoto',
            'wine.min' => 'Minimo 10 caretteri',
            'location' => 'Location non può essere vuoto',
        ];
    }
}
