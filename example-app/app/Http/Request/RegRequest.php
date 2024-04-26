<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class RegRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'FIO' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ];
    }
}