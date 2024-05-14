<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EtudiantResource extends JsonResource {
    /**
    * Transform the resource into an array.
    *
    * @return array<string, mixed>
    */

    public function toArray( Request $request ): array {
        return [
            'matricule_etud',
            'nom_prenom',
            'theme',
            'lieu_stage',
            'entreprise',
            'jury_id',
            'departement_id'
        ];
    }
}
