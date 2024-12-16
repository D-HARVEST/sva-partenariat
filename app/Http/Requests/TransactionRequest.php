<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
			'Volume' => 'required',
			'Cout' => 'required',
			'Prix' => 'required',
			'AncienPrix' => 'required',
			'Validite' => 'required',
			'Statut' => 'required|string',
			'idPaiement' => 'required',
			'Telephone' => 'required|string',
			'isPaied' => 'required',
			'isSent' => 'required',
        ];
    }
}
