<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class EntregaRequest extends FormRequest
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
        'funcionario_id' => 'required|integer|exists:funcionarios,id',
        'epi_id' => 'required|integer|exists:epis,id',
        'quantidade' => 'required|integer|min:1',
        'data_entrega' => 'required|date',
        'data_devolucao' => 'nullable|date|after_or_equal:data_entrega',
        'observacao' => 'nullable|string|max:300',
        ];
    }
}
