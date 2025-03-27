<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'slug' => ['required'],
            'body' => ['required'],
            'visibility' => ['required'],
            'likes' => ['required', 'integer'],
            'comments_count' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
