@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <h3 style="align-items: flex-end; float: right; margin-top: 0.5cm;">
                    <a href="{{ route('users.list') }}">Consulter la liste</a>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Ajouter un utilisateur</h5>
                        <hr>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" enctype="multipart/form-data" method="POST"
                            action="{{ route('users.store') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="validationCustom01">Nom</label>
                                    <input class="form-control @error('nom') is-invalid @enderror" id="validationCustom01"
                                        type="text" value="{{ old('nom') }}" name="nom" autofocus>

                                    @error('nom')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="validationCustom02">Pr&eacute;noms</label>
                                    <input class="form-control @error('prenoms') is-invalid @enderror"
                                        id="validationCustom02" type="text" value="{{ old('prenoms') }}" name="prenoms">

                                    @error('prenoms')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="contact">Contact</label>
                                    <div class="input-group">
                                        <input class="form-control @error('contact') is-invalid @enderror" id="contact"
                                            type="text" placeholder="0172363735" name="contact"
                                            value="{{ old('contact') }}" pattern="[0-9]{10}">

                                    </div>

                                    @error('contact')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="validationCustom03">Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" id="validationCustom03"
                                        type="email" placeholder="xxxs@gmail.com" name="email"
                                        value="{{ old('email') }}">

                                    @error('email')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label" for="password">Mot de passe</label>
                                    <input class="form-control @error('password') is-invalid @enderror" id="password"
                                        type="password" placeholder="*********" name="password"
                                        value="{{ old('password') }}">

                                    @error('password')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="validationCustom04">Type d'utilisateur</label>
                                    <select class="form-select @error('role') is-invalid @enderror" id="validationCustom04"
                                        name="role">
                                        <option selected="" disabled="" value="">S&eacute;lectionnez...</option>
                                        @forelse ($role as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->libelle_role }}
                                            </option>
                                        @empty
                                        @endforelse
                                    </select>

                                    @error('role')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <div class="checkbox p-0">

                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-danger" type="reset">Annuler</button>&nbsp;
                            <button class="btn btn-primary" type="submit">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
