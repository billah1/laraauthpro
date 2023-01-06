<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
class RegisterStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'bail|required|string|max:255',
            'email' =>'bail|required|string|ma:255|unique:users',
            'phone' => 'bail|required|string',
            'password' =>'bail|required|string|min:4|confirmed'

        ];
    }
}
