<?php

namespace App\Http\Requests;

use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PageStore extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'min:2',
                'max:100',
                $this->uniqueTitleRule(),
            ],
            'content' => 'required|min:20|max:2048',
            'image' => 'required|file|image|mimetypes:image/png, image/jpeg',
            'url' => 'max:64',
            'h1' => 'max:200',
            'meta_title' => 'max:120',
            'meta_description' => 'max:240',
        ];
    }

    protected function uniqueTitleRule() {
        return Rule::unique(Page::class, 'title');
    }
}
