<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;  
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'This field is required',
            'content.required' => 'This field is required'
        ];
    }
}
