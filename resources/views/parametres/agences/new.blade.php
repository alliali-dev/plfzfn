@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-xl-6" style="margin-top: 2cm;">
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
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">Nom de l'agence</label>
                                        <input class="form-control @error('agence') is-invalid @enderror"
                                            id="exampleInputEmail1" type="text" name="agence"
                                            aria-describedby="emailHelp" placeholder="Entrer le nom de l'agence">
                                        <small class="form-text text-muted" id="emailHelp">
                                            @error('agence')
                                                {{ $msg }}
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
