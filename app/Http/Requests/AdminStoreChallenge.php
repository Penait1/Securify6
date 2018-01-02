<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminStoreChallenge extends FormRequest
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
        return [
            'name'                  => 'required|max:191',
            'language_id'           => 'required|exists:programming_languages,id',
            'content'               => 'required|max:2000',
            'description'           => 'required|max:50',
            'starting_at'           => 'required|date',
            'ending_at'             => 'required|date|after:starting_at'

        ];
    }
}
