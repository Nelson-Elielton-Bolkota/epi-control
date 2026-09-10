<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreEpiRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:100',
            'tipo'=>'required|string|max:100',
            'ca' => 'required|string|max:6',
            'fabricante' => 'required|string|max:100',
            'quantidade' => 'required|integer|min:0',
            'validade' => 'required|date',
            'status' => 'required|string|max:255',
        ];
    }
}
