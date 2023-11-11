<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrashStore extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => 'required|integer|exists:pages,id',
            'title'  => 'unique:pages,title'
        ];
    }

    public function attributes(): array
    {
        return [
            'id' => 'Page',
            'title' => 'Title'
        ];
    }
}
