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
            'office.required' => 'office field is required.',
            'voterID.required' => 'voterID is required.',
            'voterID.unique' => 'Toualready registered as  Candidate.', // Message for phone uniqueness
             ];
    }
    }

