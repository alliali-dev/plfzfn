@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="margin-top: 1cm;">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <h5>Liste des guichets emploi</h5>
                            </div>
                            <div class="col-md-2">
                                <h5>
                                    <a href="{{ route('guichet.create') }}">Ajouter</a>&nbsp;<span><i
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
                                            <th scope="col">Nom guichet</th>
                                            <th scope="col">Nom agence</th>
                                            <th scope="col">Cr&eacute;&eacute; le</th>
                                            <th scope="col">Modifi&eacute; le</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($guichets as $item)
                                            <tr>
                                                <th scope="row">></th>
                                                <td>{{ $item->libelle_guichet }}</td>
                                                <td>{{ $item->agence->libelle_agence }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->updated_at }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" style="text-align: center;">
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
                                    {{ $guichets->links('pagination::bootstrap-4') }}
                                </li>
                            </ul>
                        </nav>
                    </span>
                </div>
            </div>
        </div>
    </div>
@stop
