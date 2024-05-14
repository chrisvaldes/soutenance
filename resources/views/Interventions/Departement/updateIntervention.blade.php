@extends('template')

@section('title', 'Intervention')

@section('content')
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h2 class="text-center">My section</h2>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <a href="{{ route('creation.decompte_prevu') }}" class="mb-3 btn btn-primary">Back</a>
                        </tr>
                        <tr>
                            <th class="table-active text-center">Grade</th>
                            <th class="table-active text-left text-nowrap">Noms/Prenoms</th>
                            <th class="table-active text-center">Date</th>
                            <th class="table-active text-center">Departement</th>
                            <th class="table-active text-center">P</th>
                            <th class="table-active text-center">R</th>
                            <th class="table-active text-center">E</th>
                            <th colspan="2" class="table-active text-center m-10">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{ route('decompte.save.jour') }}" method="POST">
                            @csrf
                            @forelse ($intervention_prevu as $intervention)
                                <tr class="m-2">
                                    <td class="text-center m-2">{{ $intervention->grade }}</td>
                                    <td class="text-nowrap text-left">{{ $intervention->nom_prenom_ens }}</td>
                                    <td>{{ $intervention->date }}</td>
                                    <td class="text-nowrap text-center"> {{ $intervention->departement }} </td>
                                    <td class="text-center"> {{ $intervention->prevu_pr }}</td>
                                    <td class="text-center"> {{ $intervention->prevu_ra }}</td>
                                    <td class="text-center"> {{ $intervention->prevu_ex }}</td>

                                    <td>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="me-3">
                                                <a href="{{ route('form.update.decompte.prevu', $intervention) }}"
                                                class=" btn btn-primary">
                                                <i class="fas fa-pencil"></i>
                                            </a>
                                            </div>
                                            <div>
                                                <a href="" class="btn btn-secondary"><i
                                                    class="fas fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center"><input type="hidden" name="nom_prenom_ens"
                                            value="{{ $intervention->nom_prenom_ens }}"></td>
                                    <td class="text-center"><input type="hidden" name="grade"
                                            value="{{ $intervention->grade }}"></td>
                                </tr>
                            @empty
                            @endforelse
                        </form>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="col"></div>
    </div>
@endsection
