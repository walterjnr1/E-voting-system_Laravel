<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class validateVoterregisterOTPRequest extends FormRequest
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
        'otp' => 'required|string',
        'phone' => 'required|string',

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
        'otp.required' => 'OTP is required.',
        'phone.required' => 'Phone Number is required.',

          ];
}
}

