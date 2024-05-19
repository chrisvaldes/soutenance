<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
</head>

<style>
    .en-tete{
        font-size: 15px;
        font-weight: bold
    }
    .text-body{
        font-size: 15px
    }
</style>

<body>

    <div style="margin-top:5rem">
        <img src="{{ asset('storage/pictures/8Ipey07HhaWh1vTqjbmuNABC7y82Wi4yBZ9b1qCp.jpg') }}" alt="En-tête"
            style="text-align: center" />
    </div>
    <h5 style="text-align: center">FICHE DE NOTATION ET DE SOUTENANCE DU MEMOIRE</h5>

    <div>
        <table style="width: 100%">
            <tbody>
                <tr>
                    <td class="en-tete">Date :</td>
                    <td class="en-tete">Heure :</td>
                    <td class="en-tete">Salle :</td>
                    <td class="en-tete">Matricule :</td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- nom et prenom --}}

    <div>
        <table style="width: 100%">
            <tbody>
                <tr>
                    <td class="en-tete">Nom(s) et prénom(s) de l'étudiant : </td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- Département et parcours --}}

    <div>
        <table style="width: 100%">
            <tbody>
                <tr>
                    <td class="en-tete">Département : </td>
                    <td class="en-tete">Parcours : </td>
                </tr>
                <tr>
                    <td class="en-tete">Lieu de stage : </td>
                    <td class="en-tete">Entreprise : </td>
                </tr>
                <tr>
                    <td class="en-tete">Sujet : </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <div style="text-decoration: underline; text-align : center; margin : 1rem 0 0.5rem">NOTATION DE LA SOUTENANCE
        </div>
    </div>
    <div>
        <table border="1" style="border-collapse: collapse; width:100%">

            <tr>
                <td rowspan="3" class="text-body">Note sur la forme (30pts)</td>
                <td class="text-body">Exposé : Qualité d'expression et de communication</td>
                <td class="text-body" style="width: 10%; text-align:right">/10</td>
            </tr>
            <td class="text-nowrap w-90 text-body">Exposé : Qualité de la présentation orale</td>
            <td class="text-body" style="width: 10%; text-align:right">/10</td>
            </tr>
            <tr>
                <td class="text-body">Personnalité du candidat</td>
                <td class="text-body" style="width: 10%; text-align:right">/10</td>
            </tr>
            <!-- -->
            <tr>
                <td rowspan="2" class="align-top text-body">Note sur le fond (40pts)</td>
                <td class="text-body">Présentation des résultats obtenus</td>
                <td class="text-body" style="width: 10%; text-align:right">/10</td>
            </tr>
            <tr>
                <td class="text-nowrap w-90 text-body">Compréhension et métrise technique du sujet, capacité à répondre aux
                    questions
                </td>
                <td class="text-body" style="width: 10%; text-align:right">/30</td>
            </tr>
            <tr>
                <td colspan="2" class="text-nowrap w-90 text-body">conformité de mise en stage</td>
                <td class="text-body" style="width: 10%; text-align:right">/5</td>
            </tr>
            <tr>
                <td colspan="2" class="text-nowrap w-90 text-body">Dépot de mémoire en règle</td>
                <td class="text-body" style="width: 10%; text-align:right">/5</td>
            </tr>
            <tr>
                <td colspan="2" class="text-nowrap w-90 text-body">TOTAL sur 80</td>
                <td class="text-body" style="width: 10%; text-align:right">/80</td>
            </tr>
            <tr>
                <td colspan="2" class="text-nowrap w-90 text-body">TOTAL sur 20</td>
                <td class="text-body" style="width: 10%; text-align:right"> /20</td>
            </tr>
        </table>
    </div>
    <div>
        <div class="d-flex align-items-center justify-content-around">
            <div class="text-nowrap text-body" style="margin: 1rem 0 1rem">Remarques sur la soutenance : </div>
            <hr class="w-100">
        </div>
        <div>
            <hr class="w-100 mb-5">
        </div>
    </div>

    <div>
        <div style="text-decoration: underline; text-align : center; margin-bottom: 1rem ">NOTATION DU MEMOIRE</div>
        <div class="text-nowrap text-body">
            <span style="text-decoration: underline; font-weight:bold">NB</span>
            <i style="font-weight: bold">Les encadreurs écoles et industriels ne
                sont pas autorisés à donner une note d'évaluation pour le mémoire</i>
        </div>
    </div>
    <div>
        <table border="1" style="border-collapse: collapse">
            <thead>
                <tr>
                    <th></th>
                    <th class="text-body">Critères d'évaluation</th>
                    <th class="text-body">Note attribuée</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td class="text-body">FORME </td>
                    <td style="width: 100%" class="text-body">
                        <span>- Effort de présentation <br></span>
                        <span>- Rédaction proprement dite comprenant : accentuation, ponctuation<br>orthographe
                            grammaticale, orthographe d'usage, vocabulaire, syntaxe et plan</span>
                    </td>
                    <td style="width: 10%; text-align:right"  class="text-body">/20</td>
                </tr>
                <tr>
                    <td class="text-body">FOND </td>
                    <td  class="text-body">
                        <span>- Problématique, Méthode scientifiques utilisées<br>
                            - Plan suivi, Exploitation des résultats, Efficacité de la solution</span>
                    </td>
                    <td style="width: 10%; text-align:right"  class="text-body">/30</td>
                </tr>
                <tr>
                    <td class="text-body">TOTAL</td>
                    <td></td>
                    <td style="width: 10%; text-align:right"  class="text-body">/50</td>
                </tr>
                <tr>
                    <td class="text-nowrap text-body">MOYENNE</td>
                    <td></td>
                    <td style="width: 10%; text-align:right"  class="text-body">/50</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <div style="text-decoration: underline; text-align : center; margin : 0.5rem 0 .5rem 0">Membres du Jury :</div>
    </div>

    <div>

        <table border="1" style="width: 100%; border-collapse: collapse">
            <thead>
                <tr>
                    <th></th>
                    <th  class="text-body">Président</th>
                    <th  class="text-body">Examinateur</th>
                    <th  class="text-body">Rapporteur</th>
                    <th  class="text-body">Encadreur/<br>Entreprise</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-size: 0.7rem">NOM</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="font-size: 0.7rem">SIGNATURE</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <div class="d-flex align-items-center justify-content-around">
            <p class="text-nowrap text-body">Remarques sur le mémoire : </p>
            <hr class="w-100">
        </div>
        <div>
            <hr class="w-100 mb-5">
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-center text-center">
        <p class="text-nowrap text-body">MENTION : </p>
        <hr class="w-50">
    </div>

</body>

</html>
