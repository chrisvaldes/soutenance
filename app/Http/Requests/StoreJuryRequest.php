<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJuryRequest extends FormRequest {
    /**
    * Determine if the user is authorized to make this request.
    */

    public function authorize(): bool {
        return true;
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
    */

    public function rules(): array {
        return [
            'president' => ["required", "string"],
            'examinateur' => ["required", "string"],
            'rapporteur' => ["required", "string"],
            'encadreur' => ["required", "string"],
            'entreprise' => ["string"],
            'date' => ["required", "string"],
            'heure' => ["required", "string"],
        ];
    }
}