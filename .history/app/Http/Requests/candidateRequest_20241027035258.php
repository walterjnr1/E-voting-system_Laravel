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
            'voterID' => 'required|string|unique:tblcandidates,voterID', 
            'office' => 'required|string',
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
            'party.required' => 'Party field is required.',
            'voterID.required' => 'voterID is required.',
            'voterID.unique' => 'voterID is already registered.', // Message for phone uniqueness
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
    
    