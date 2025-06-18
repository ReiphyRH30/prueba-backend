<?php

namespace App\Http\Requests\Currency;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCurrencyRequest extends FormRequest
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
            'id' => 'required|exists:currencies,id',
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('currencies', 'name')->ignore($this->get("id"))
            ],
            'symbol' => [
                'required',
                'string',
                'max:10',
                Rule::unique('currencies', 'symbol')->ignore($this->get("id"))
            ],
            'exchange_rate' => 'required|numeric|gt:0',
        ];
    }
}
