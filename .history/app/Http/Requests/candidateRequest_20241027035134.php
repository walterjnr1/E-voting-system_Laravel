<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class candidateRequest extends FormRequest
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
            'party' => 'required|string',
            'email' => 'required|string|unique:tblcandidates,voterID', // Check if tblcandidates is unique
            'office' => 'required|string',
            'sex' => 'required|string',
            'DOB' => 'required|string',
            'phone' => 'required|string|unique:tblvoters,phone', // Check if phone is unique
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
            'party.required' => 'Voter\'s Fullname is required.',
            'maritalstatus.required' => 'Voter\'s marital Status is required.',
            'sex.required' => 'Voter\'s sex is required.',
            'phone.required' => 'Voter\'s Phone is required.',
            'phone.unique' => 'This phone number is already registered.', // Message for phone uniqueness
            'address.required' => 'Voter\'s Address is required.',
            'lga.required' => 'Voter\'s Lga State is required.',
            'state.required' => 'Voter\'s State is required.',
            'occupation.required' => 'Voter\'s Occupation is required.',
            'email.required' => 'Voter\'s email is required.',
            'email.email' => 'Voter\'s email must be a valid email address.',
            'email.unique' => 'This email is already registered.', // Message for email uniqueness
            'photo.required' => 'Voter\'s Photo is required.',
            'photo.image' => 'File must be an image.',
            'photo.mimes' => 'Photo must be a file of type: jpeg,jpg, png, svg, gif',
            'photo.max' => 'Photo size must be less than 2mb.',
        ];
    }
    }
    
    