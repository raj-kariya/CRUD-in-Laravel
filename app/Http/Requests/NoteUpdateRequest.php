<?php

namespace App\Http\Requests;
use App\Models\Note;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Route;

class NoteUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;  
    }

    public function rules(): array
    {
        // $curr_id = $this->route('note');
        return [
            'title' => [
                'required',
                Rule::unique('notes')->ignore($this->route('note')),
                'string',
                'max:255',
            ],
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
