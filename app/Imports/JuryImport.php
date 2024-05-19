<?php

namespace App\Imports;

use App\Models\Etudiant;
use App\Models\Jury;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class JuryImport implements ToCollection, WithHeadingRow, WithValidation {
    /**
    * @param Collection $collection
    */

    public function collection( Collection $rows ) {
        foreach ( $rows as $row ) {
            $jury = [
                'president' => $row->President,
                'examinateur' => $row->Examinateur,
                'rapporteur' => $row->Rapporteur,
                'encadreur'=> $row->Encadreur,
                'entreprise' => $row->Entreprise,
                'date' => $row->Date,
                'heure' => $row->Heure,
                'salle' => $row->salle
            ];

            $etudiant = [
                'nom_etud' => $row->Noms_Prenoms,
                'matricule' => $row->Matricule,
                'theme' => $row->Theme
            ];
        }

        Jury::create($jury);
        Etudiant::create( $etudiant );
    }

    public function rules(): array  {
        return [
            'president' => "required",
            'examinateur' => "required",
            'rapporteur' => "required", 
            'date' => "required",
            'heure' => "required",
            'salle' => "required",
            'nom_etud' => "required",
            'matricule' => "required",
            'theme' => "required"
        ];
    }
}
