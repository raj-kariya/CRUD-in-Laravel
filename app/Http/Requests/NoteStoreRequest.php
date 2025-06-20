<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => 'required|unique:notes|string|max:255',
            'content' => 'required|string',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'This field is required',
            'title.unique' => 'This title already exists',
            'content.required' => 'This field is required'
        ];
    }
}
