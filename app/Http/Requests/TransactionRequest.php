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
			'Validite' => 'required',
			'Statut' => 'required|string',
            'ModePaiement' => 'required|string',
            'data_package_id' => 'required',
            'user_id' => 'required',
			'idPaiement' => 'required',
			'Telephone' => 'required|string',
			'isPaied' => 'required',
			'isSent' => 'required',
        ];
    }
}
