@extends('template')

@section('title', 'Intervention')

@section('content')
    <div class="">
        <span class="float-start">
            <a class="fas fa-arrow-left p-1 text-decoration-none cursor-pointer"></a>
        </span>
        <h2 class="text-center">My section</h2>
    </div>
    <div class="row">
        <div class="col"> </div>
        <div class="col">
            <div class="table-responsive">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <div>
                                <a href="{{ route('update.decompte_prevu') }}" class="mb-3 btn btn-primary">Update</a>
                                <a href="{{ route('update.decompte_prevu') }}" class="mb-3 btn btn-primary">Liste
                                    Intervention</a>
                            </div>

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
                        @forelse ($intervention_prevu as $intervention)
                            <form action="{{ route('decompte.save.jour') }}" method="POST">
                                @csrf
                                <tr class="m-2">
                                    <td class="text-center m-2">{{ $intervention->grade }}</td>
                                    <td class="text-nowrap text-left">{{ $intervention->nom_prenom_ens }}</td>
                                    <td><input type="date" name="date" id="date" class="mx-12"></td>
                                    <td><select class="mx-2" name="departement" id="">
                                            @foreach ($departements as $departement)
                                                <option value="{{ $departement->nom_depart }}">
                                                    {{ $departement->nom_depart }}
                                                </option>
                                            @endforeach
                                        </select></td>
                                    <td class="text-center"><input type="number" min="0" name="prevu_pr"
                                            value="{{ $intervention->prevu_pr }}"></td>
                                    <td class="text-center"><input type="number" min="0" name="prevu_ra"
                                            value="{{ $intervention->prevu_pr }}"></td>
                                    <td class="text-center"><input type="number" min="0" name="prevu_ex"
                                            value="{{ $intervention->prevu_pr }}"></td>

                                    <td>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button
                                                class=" bg-primary m-1 d-flex align-items-center justify-content-center text-nowrap m-20">
                                                <i class="fas fa-save p-1"></i> (0)
                                            </button>
                                            {{-- <a href="" class="btn btn-secondary"><i
                                                    class="fas fa-pencil-alt"></i></a> --}}
                                        </div>
                                    </td>
                                    <td class="text-center"><input type="hidden" name="nom_prenom_ens"
                                            value="{{ $intervention->nom_prenom_ens }}"></td>
                                    <td class="text-center"><input type="hidden" name="grade"
                                            value="{{ $intervention->grade }}"></td>
                                </tr>
                            </form>

                        @empty
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
        <div class="col"></div>
    </div>
@endsection


{{-- <label for="exampleDataList" class="form-label">Datalist example</label>
<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
<datalist id="datalistOptions">
  <option value="San Francisco">
  <option value="New York">
  <option value="Seattle">
  <option value="Los Angeles">
  <option value="Chicago">
</datalist> --}}
