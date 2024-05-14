@extends('template')

@section('title', 'Intervention')

@section('content')


    <h2 class="text-center">My section</h2>
    <div class="row g-4 p-2">
        <div class="col w-100 pt-5">
            <a class="w-100 btn btn-primary m-1">Créer Jury</a>
            <a class="w-100 btn btn-primary m-1">Créer Etudiant</a>
            <a class="w-100 btn btn-primary m-1">Créer Interventions</a>
            <a class="w-100 btn btn-primary m-1">Intervention effectif</a>
            <a class="w-100 btn btn-primary m-1">Bilan Interventions</a>
        </div>
        <div class="col-10 ">
            <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center">Date</th>
                            <th colspan="3" class="text-center">Prévu</th>
                            <th colspan="3" class="text-center">Effectif</th>
                        </tr>
                        <tr>
                            <th class="table-active">Grade</th>
                            <th class="table-active text-center text-nowrap">Noms/Prenoms</th>
                            <th class="table-active text-center">P</th>
                            <th class="table-active text-center">R</th>
                            <th class="table-active text-center">E</th>
                            <th class="table-active text-center">P</th>
                            <th class="table-active text-center">R</th>
                            <th class="table-active text-center">E</th>
                            <th class="table-active text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($decompteJours as $decompteJour)
                            <form method="POST" action="{{ route('udateDecompte.journalier', $decompteJour) }}">
                                @csrf
                                <tr>
                                    <td>{{ $decompteJour->grade }}</td>
                                    <td class="text-nowrap">{{ $decompteJour->nom_prenom_ens }}</td>
                                    <td>{{ $decompteJour->prevu_pr }}</td>
                                    <td>{{ $decompteJour->prevu_ra }}</td>
                                    <td>{{ $decompteJour->prevu_ex }}</td>
                                    <td><input type="number" min="0" name="effec_pr"
                                            value="{{ $decompteJour->effec_pr }}"></td>
                                    <td><input type="number" min="0" name="effec_ra"
                                            value="{{ $decompteJour->effec_ra }}"></td>
                                    <td><input type="number" min="0" name="effec_ex"
                                            value="{{ $decompteJour->effec_ex }}"></td>

                                    <td>
                                        <div>
                                            <button
                                                class="bg-primary m-1 d-flex align-items-center justify-content-center text-nowrap m-20">
                                                <i class="fas fa-save p-1"></i> (0)
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <td><input type="hidden" name="prevu_pr" value="{{ $decompteJour->prevu_pr }}"></td>
                                <td><input type="hidden" name="prevu_ra" value="{{ $decompteJour->prevu_ra }}"></td>
                                <td><input type="hidden" name="prevu_ex" value="{{ $decompteJour->prevu_ex }}"></td>
                            </form>
                        @empty
                        @endforelse
                    </tbody>

                </table>

            </div>
        </div>
    </div>

    </div>
    <script>
        new DataTable('#example');
    </script>

@endsection
