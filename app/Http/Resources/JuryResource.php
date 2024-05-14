<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JuryResource extends JsonResource {
    /**
    * Transform the resource into an array.
    *
    * @return array<string, mixed>
    */

    public function toArray( Request $request ): array {
        return [
            'id',
            'president',
            'examinateur',
            'rapporteur',
            'encadreur',
            'entreprise',
            'date',
            'heure'
        ];
    }
}
