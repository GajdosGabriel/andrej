<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'first_name' => 'required|max:191',
            'last_name' => 'required|max:191',
            'street' => 'max:255',
            'phone' => 'max:190',
            'email' => 'required|unique:users|max:255',
            'date' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Meno je povinné',
            'last_name.required' => 'Priezvisko je povinné',
            'email.required' => 'Email sa požaduje',
            'email.unique' => 'Email už existuje',
            'date.required' => 'Dátum musí byť uvedený',
            'street' => 'Nesmie byť dlhší ako 255 znakov',
            'phone' => 'Nesmie obsahovať viac ako 190 znakov',
        ];
    }
}
