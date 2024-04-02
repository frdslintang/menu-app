<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|string',
            'email' => 'required|email|unique:users.email',
            'password' => 'required|min:7|confirmed'
        ];
    }
}
