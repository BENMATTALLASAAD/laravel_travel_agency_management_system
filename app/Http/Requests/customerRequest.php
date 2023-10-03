<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class customerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'login'=>'required',
            'password'=>'required',
            'name'=>'required',
            'lastName'=>'required',
            'image'=>'mimes:jpg,svg,png',
            'adress'=>'required',
            'email'=>'required|email|',
            'phone_Num'=>'required',
            'sexe'=>'required',
            'birthday'=>'required'
        ];
    }
}
