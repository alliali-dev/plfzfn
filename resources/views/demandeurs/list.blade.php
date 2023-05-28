@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="margin-top: 1cm;">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <h5>Liste des demandeurs</h5>
                            </div>
                            <div class="col-md-2">
                                <h5>
                                    <a href="{{ route('demandeurs.create') }}">Ajouter</a>&nbsp;<span><i
                                            class="fa fa-plus-circle"></i></span>
                                </h5>
                            </div>
                        </div>

                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nom & pr&eacute;noms</th>
                                            <th scope="col">Sexe</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Date De Naissance</th>
                                            <th scope="col">Programme</th>
                                            {{-- <th scope="col">Modifi&eacute; le</th> --}}
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($demandeurs as $item)
                                            <tr>
                                                <th scope="row">></th>
                                                <td>{{ $item->nom . ' ' . $item->prenoms }}</td>
                                                <td>{{ $item->sexe_demandeur }}</td>
                                                <td>{{ $item->contact1_demandeur }}</td>
                                                <td>{{ $item->date_naiss_demandeur }}</td>
                                                <td>{{ $item->programme->libelle_programme }}</td>
                                                {{-- <td>{{ $item->updated_at }}</td> --}}
                                                <td>
                                                    @if ($item->programme->libelle_programme == 'THIMO')
                                                        <a href="" class="btn btn-info">Visite</a>
                                                    @else
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" style="text-align: center;">
                                                    Aucune donn&eacute;&eacute;!
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                        <nav aria-label="Table navigation">
                            <ul class="inline-flex items-center">
                                <li class="Table navigation">
                                    {{ $demandeurs->links('pagination::bootstrap-4') }}
                                </li>
                            </ul>
                        </nav>
                    </span>
                </div>
            </div>
        </div>
    </div>
@stop
