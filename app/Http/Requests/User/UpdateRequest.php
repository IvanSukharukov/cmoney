<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function attributes()
    {
        return [
            'name' => 'Имя',
            'is_premium' => 'premium',
        ];
    }

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'surname' => 'nullable|string',
//            'email' => 'required|string',
//            'password' => 'required|string|confirmed',
            'is_premium' => '',
        ];
    }
}
