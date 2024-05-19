<?php

namespace App\Imports;

use App\Models\Etudiant;
use App\Models\Jury;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class JuryImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $etudiant = [
                "jury_id" => $row["n"],
                'nom_prenom' => $row["nometudiant"],
                'matricule_etud' => $row["matricule"],
                'theme' => $row["theme"],
            ];

            $jury = [
                "num_jury" => $row["n"],
                'date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row["date"])->format('Y-m-d'),
                'heure' => $row["heure"],
                'salle' => $row["salle"],
                'president' => $row["president"],
                'examinateur' => $row["examinateur"],
                'rapporteur' => $row["rapporteur"],
                'encadreur' => $row["invite"],
                'entreprise' => $row["invite"],

            ];


            Jury::create($jury);
            Etudiant::create($etudiant);
        }
    }

    public function rules(): array
    {
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
