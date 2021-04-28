<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        // Email with filter has some edge cases. For example, test@localhost is considered valid per RFC.
        // But in our case, it's fine.
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email_address' => 'required|email:filter',
            'phone_number' => 'required|string',
        ];
    }
}
