<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class voterRequest extends FormRequest
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
            'fullname' => 'required|string',
            'email' => 'required|string',
            'maritalstatus' => 'required|string',
            'sex' => 'required|string',
            'DOB' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'lga' => 'required|string',
            'state' => 'required|string',
            'occupation' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,svg,jpg,gif|max:2048', // Adjust max size as needed
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
            'fullname.required' => 'Pickup address is required.',
            'email.required' => 'Pickup phone number is required.',
            'maritalstatus.required' => 'Pickup State is required.',
            'sex.required' => 'Receiver\'s name is required.',
            'DOB.string' => 'Receiver\'s name must be a string.',
            'phone.required' => 'Receiver address is required.',
            'address.required' => 'Receiver phone number is required.',
            'lga.required' => 'Receiver State is required.',
            'state.required' => 'Package type is required.',
            'occupation.required' => 'Package weight is required.',
            'email.required' => 'Receiver\'s email is required.',
            'txtreceiverEmail.email' => 'Receiver\'s email must be a valid email address.',
            'txtphoto.required' => 'Package Photo is required.',
            'txtphoto.image' => 'File must be an image.',
            'txtphoto.mimes' => 'Photo must be a file of type: jpeg,jpg, png, svg, gif',
            'txtphoto.max' => 'Photo size must be less than 2mb.',
        ];
        
    }
}
}
