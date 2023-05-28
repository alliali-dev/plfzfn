@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <h3 style="align-items: flex-end; float: right; margin-top: 0.5cm;">
                    <a href="{{ route('guichet.list') }}">Consulter la liste</a>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-6" style="margin-top: 1cm;">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>Ajouter un guichet</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" enctype="multipart/form-data" method="POST"
                                    action="{{ route('guichet.store') }}">
                                    @csrf
                                    <div class="row">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Nom du guichet</label>
                                        <input class="form-control @error('guichet') is-invalid @enderror"
                                            id="exampleInputEmail1" type="text" name="guichet"
                                            aria-describedby="emailHelp" placeholder="Entrer le nom du guichet">

                                        @error('guichet')
                                            <small class="alert alert-danger" id="emailHelp">
                                                {{ $message }}
                                            </small>
                                        @enderror

                                    </div>
                                    <br>
                                    <div class="row">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Nom de l'agence</label>
                                        <select class="form-control @error('agence') is-invalid @enderror"
                                            id="exampleInputEmail1" type="text" name="agence"
                                            aria-describedby="emailHelp" placeholder="Entrer le nom de l'agence">
                                            <option disabled selected>Choisissez l'agence</option>
                                            @forelse ($agence as $item)
                                                <option value="{{ $item->id }}">{{ $item->libelle_agence }}</option>
                                            @empty
                                            @endforelse
                                        </select>

                                        @error('agence')
                                            <small class="alert alert-danger" id="emailHelp">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="row"></div>
                                    <div class="card-footer">
                                        <button class="btn btn-danger" type="reset">Annuler</button>
                                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
