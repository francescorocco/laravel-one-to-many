<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreWorkRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required',Rule::unique('works')->ignore($this->work),'max:70'],
            'description' => 'nullable|max:65000',
            'languages' => 'nullable|max:250',
            'type_id' => 'nullable|exists:types,id'
        ];
    }
}
