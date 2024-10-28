<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class voterOTPRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
{
    return [
        'phone' => 'required|string',
        'otp' => 'required|integer',
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
        'fullname.required' => 'Voter\'s Fullname is required.',
        'maritalstatus.required' => 'Voter\'s marital Status is required.',
        'sex.required' => 'Voter\'s sex is required.',
        'phone.required' => 'Voter\'s Phone is required.',
        ];
}
}

