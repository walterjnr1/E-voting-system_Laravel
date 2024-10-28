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
            'occupation' => 'required|integer',
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
            'txtpickupAddress.required' => 'Pickup address is required.',
            'txtpickupPhone.required' => 'Pickup phone number is required.',
            'txtpickupState.required' => 'Pickup State is required.',
            'txtreceiverName.required' => 'Receiver\'s name is required.',
            'txtreceiverName.string' => 'Receiver\'s name must be a string.',
            'txtreceiverAddress.required' => 'Receiver address is required.',
            'txtreceiverPhone.required' => 'Receiver phone number is required.',
            'txtreceiverState.required' => 'Receiver State is required.',
            'cmdpackageType.required' => 'Package type is required.',
            'txtpackageWeight.required' => 'Package weight is required.',
            'txtpackageQty.required' => 'Package quantity is required.',
            'txtpackageQty.integer' => 'Package quantity must be a number.',
            'txtreceiverEmail.required' => 'Receiver\'s email is required.',
            'txtreceiverEmail.email' => 'Receiver\'s email must be a valid email address.',
            'txtphoto.required' => 'Package Photo is required.',
            'txtphoto.image' => 'File must be an image.',
            'txtphoto.mimes' => 'Photo must be a file of type: jpeg,jpg, png, svg, gif',
            'txtphoto.max' => 'Photo size must be less than 2mb.',
        ];
        
    }
}
}
