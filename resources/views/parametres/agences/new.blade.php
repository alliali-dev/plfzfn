@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <h3 style="align-items: flex-end; float: right; margin-top: 0.5cm;">
                    <a href="{{ route('agence.list') }}">Consulter la liste</a>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xl-6" style="margin-top: 1cm;">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>Ajouter une agence</h5>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" enctype="multipart/form-data" method="POST"
                                    action="{{ route('agence.store') }}">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Nom de l'agence</label>
                                        <input class="form-control @error('agence') is-invalid @enderror"
                                            id="exampleInputEmail1" type="text" name="agence"
                                            aria-describedby="emailHelp" placeholder="Entrer le nom de l'agence">
                                        <small class="form-text text-muted" id="emailHelp">
                                            @error('agence')
                                                {{ $mesaage }}
                                            @enderror
                                        </small>
                                    </div>
                                    <div class="row"></div>
                                    <div class="card-footer">
                                        <button class="btn btn-secondary" type="reset">Annuler</button>
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
