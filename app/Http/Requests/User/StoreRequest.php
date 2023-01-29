<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function attributes()
    {
        return [
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
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
            //TODO: полностью разобраться с чекбоксом
            'is_premium' => 'boolean',
        ];
    }
}
