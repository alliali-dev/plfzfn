@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="margin-top: 1cm;">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <h5>Liste des programmes r&eacute;gionales</h5>
                            </div>
                            <div class="col-md-2">
                                <h5>
                                    <a href="{{ route('agence.create') }}">Ajouter</a>&nbsp;<span><i
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
                                        <tr style="text-transform: uppercase">
                                            <th scope="col">#</th>
                                            <th scope="col">Nom programme</th>
                                            {{-- <th scope="col">Cr&eacute;&eacute;e le</th> --}}
                                            <th scope="col">D&eacute;mandeurs</th>
                                            {{-- <th scope="col">Modifi&eacute;e le</th> --}}
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($programmes as $item)
                                            <tr>
                                                <th scope="row">></th>
                                                <td>{{ $item->libelle_programme }}</td>
                                                {{-- <td>{{ $item->created_at }}</td> --}}
                                                {{-- {{ dd($item->demandeur) }} --}}
                                                @forelse ($item->demandeur as $demand)
                                                    <td>{{ $demand->nom . ' ' . $demand->prenoms }}</td>
                                                @empty
                                                    <td> {{ 'Aucun' }}</td>
                                                @endforelse
                                                {{-- <td>{{ $item->updated_at }}</td> --}}
                                                <td>
                                                    @if ($item->libelle_programme == 'THIMO')
                                                        <button type="button" class="btn btn-warning"
                                                            data-bs-toggle="modal" data-bs-target="#visiteModal">
                                                            Visite
                                                        </button>
                                                    @else
                                                    @endif
                                                </td>
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
                                    {{ $programmes->links('pagination::bootstrap-4') }}
                                </li>
                            </ul>
                        </nav>
                    </span>
                </div>
            </div>
        </div>
    </div>
@stop
<!--modal thimo-->
<!--modal thimo visite-->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="visiteModal" tabindex="-1" aria-labelledby="visiteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="visiteModalLabel" style="text-transform: uppercase;">Visite m&eacute;dicale
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="tel" name="" id="">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end modal thimo visite-->
<!--modal thimo vaccination-->

<!--end modal thimo  vaccination-->










<!--end modal thimo-->
