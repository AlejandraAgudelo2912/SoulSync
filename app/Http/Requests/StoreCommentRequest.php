<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'slug' => ['required'],
            'body' => ['required'],
            'likes' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
