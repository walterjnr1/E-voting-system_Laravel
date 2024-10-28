<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
{
    return [
        'voterID' => 'required|string',
    ];
}

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
{
    return [
        'voterID.required' => 'Voter ID is required.',
          ];
}
}
