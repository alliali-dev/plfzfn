@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <h3 style="align-items: flex-end; float: right; margin-top: 0.5cm;">
                    <a href="{{ route('demandeurs.list') }}">Consulter la liste</a>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Ajouter un demandeur</h5>
                        <hr>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="POST"
                            action="{{ route('demandeurs.store') }}" autocomplete="off">
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
                                    <label class="form-label" for="date_naiss_demandeur">Date de naissance demandeur</label>
                                    <div class="input-group">
                                        <input class="form-control @error('date_naiss_demandeur') is-invalid @enderror"
                                            id="date_naiss_demandeur" type="date" name="date_naiss_demandeur"
                                            value="{{ old('date_naiss_demandeur') }}">

                                    </div>

                                    @error('date_naiss_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="lieu_naiss_demandeur">Lieu de naissance demandeur</label>
                                    <input class="form-control @error('lieu_naiss_demandeur') is-invalid @enderror"
                                        id="lieu_naiss_demandeur" type="text" placeholder="" name="lieu_naiss_demandeur"
                                        value="{{ old('lieu_naiss_demandeur') }}">

                                    @error('lieu_naiss_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="sexe_demandeur">Sexe</label>
                                    <select class="form-select @error('sexe_demandeur') is-invalid @enderror"
                                        id="sexe_demandeur" name="sexe_demandeur">
                                        <option selected="" disabled="" value="">S&eacute;lectionnez...</option>

                                        <option value="{{ 'M' }}">
                                            Masculin
                                        </option>
                                        <option value="{{ 'F' }}">
                                            F&eacute;minin
                                        </option>
                                    </select>

                                    @error('sexe_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label" for="sp_lieu_naiss_demandeur">S/P Lieu de naissance</label>
                                    <input class="form-control @error('sp_lieu_naiss_demandeur') is-invalid @enderror"
                                        id="sp_lieu_naiss_demandeur" type="text" placeholder=""
                                        name="sp_lieu_naiss_demandeur" value="{{ old('sp_lieu_naiss_demandeur') }}">

                                    @error('sp_lieu_naiss_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="nationalite_demandeur">Nationalit&eacute;
                                        demandeur</label>
                                    <input class="form-control @error('nationalite_demandeur') is-invalid @enderror"
                                        id="nationalite_demandeur" type="text" placeholder="Ivoiriennne"
                                        name="nationalite_demandeur" value="{{ old('nationalite_demandeur') }}">

                                    @error('nationalite_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="handicap_demandeur">Handicap</label><br><br>
                                    <input class="@error('handicap_demandeur') is-invalid @enderror" id="handicap_demandeur"
                                        type="radio" name="handicap_demandeur" value="{{ 'Oui' }}">Oui&nbsp;
                                    <input class="@error('handicap_demandeur') is-invalid @enderror" id="handicap_demandeur"
                                        type="radio" name="handicap_demandeur" value="{{ 'Non' }}" checked>Non

                                    @error('handicap_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="type_handicap_demandeur">Type d'Handicap</label>
                                    <select class="form-select @error('type_handicap_demandeur') is-invalid @enderror"
                                        id="type_handicap_demandeur" name="type_handicap_demandeur">
                                        <option selected="" disabled="" value="">S&eacute;lectionnez...
                                        </option>
                                        <option value="Mental">Mental</option>
                                        <option value="Physique">Physique</option>
                                    </select>

                                    @error('type_handicap_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="piece_demandeur">Pi&egrave;ce demandeur</label>
                                    <input class="form-control @error('piece_demandeur') is-invalid @enderror"
                                        id="piece_demandeur" type="text" placeholder="" name="piece_demandeur"
                                        value="{{ old('piece_demandeur') }}">

                                    @error('piece_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label" for="nature_piece_demandeur">Nature pi&egrave;ce
                                        demandeur</label>
                                    <input class="form-control @error('nature_piece_demandeur') is-invalid @enderror"
                                        id="nature_piece_demandeur" type="text" placeholder=""
                                        name="nature_piece_demandeur" value="{{ old('nature_piece_demandeur') }}">

                                    @error('nature_piece_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="contact1_demandeur">Contact1 demandeur</label>
                                    <div class="input-group">
                                        <input class="form-control @error('contact1_demandeur') is-invalid @enderror"
                                            id="contact1_demandeur" type="text" placeholder="0172363735"
                                            name="contact1_demandeur" value="{{ old('contact1_demandeur') }}"
                                            pattern="[0-9]{10}">

                                    </div>

                                    @error('contact1_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="contact2_demandeur">Contact2 demandeur</label>
                                    <div class="input-group">
                                        <input class="form-control @error('contact2_demandeur') is-invalid @enderror"
                                            id="contact2_demandeur" type="text" placeholder="0172363735"
                                            name="contact2_demandeur" value="{{ old('contact2_demandeur') }}"
                                            pattern="[0-9]{10}">

                                    </div>

                                    @error('contact2_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label" for="pers_contact_urgent">Personne &agrave;
                                        contacter</label>
                                    <div class="input-group">
                                        <input class="form-control @error('pers_contact_urgent') is-invalid @enderror"
                                            id="pers_contact_urgent" type="text" placeholder=""
                                            name="pers_contact_urgent" value="{{ old('pers_contact_urgent') }}">

                                    </div>

                                    @error('pers_contact_urgent')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="contact_pers">Contact personne</label>
                                    <div class="input-group">
                                        <input class="form-control @error('contact_pers') is-invalid @enderror"
                                            id="contact_pers" type="text" placeholder="0172363735"
                                            name="contact_pers" value="{{ old('contact_pers') }}" pattern="[0-9]{10}">

                                    </div>

                                    @error('contact_pers')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="lieu_rh_demandeur">lieu rh</label>
                                    <input class="form-control @error('lieu_rh_demandeur') is-invalid @enderror"
                                        id="lieu_rh_demandeur" type="text" placeholder="" name="lieu_rh_demandeur"
                                        value="{{ old('lieu_rh_demandeur') }}">

                                    @error('lieu_rh_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label" for="sp_lieu_demandeur">Sous-prefecture</label>
                                    <input class="form-control @error('sp_lieu_demandeur') is-invalid @enderror"
                                        id="sp_lieu_demandeur" type="text" name="sp_lieu_demandeur"
                                        value="{{ old('sp_lieu_demandeur') }}">

                                    @error('sp_lieu_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="nivetude_demandeur">Niveau &eacute;tude</label>
                                    <input class="form-control @error('nivetude_demandeur') is-invalid @enderror"
                                        id="nivetude_demandeur" type="text" name="nivetude_demandeur"
                                        value="{{ old('nivetude_demandeur') }}">

                                    @error('nivetude_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="specialite_demandeur">Sp&eacute;cialit&eacute;</label>
                                    <input class="form-control @error('specialite_demandeur') is-invalid @enderror"
                                        id="specialite_demandeur" type="text" name="specialite_demandeur"
                                        value="{{ old('specialite_demandeur') }}">

                                    @error('specialite_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label" for="diplome_demandeur">Dipl&ocirc;me</label>
                                    <input class="form-control @error('diplome_demandeur') is-invalid @enderror"
                                        id="diplome_demandeur" type="text" name="diplome_demandeur"
                                        value="{{ old('diplome_demandeur') }}">

                                    @error('diplome_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="annee_diplo_demandeur">Ann&eacute;&eacute;
                                        dipl&ocirc;me</label>
                                    <input type="date"
                                        class="form-select @error('annee_diplo_demandeur') is-invalid @enderror"
                                        id="annee_diplo_demandeur" name="annee_diplo_demandeur">

                                    @error('annee_diplo_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="validationCustom03">Statut</label>
                                    <select class="form-control @error('occup_actu_demandeur') is-invalid @enderror"
                                        id="validationCustom03" name="occup_actu_demandeur"
                                        value="{{ old('occup_actu_demandeur') }}">
                                        <option value="" disabled selected>Choisir...</option>
                                        <option value="Etudiant(e)">Etudiant(e)</option>
                                        <option value="Travailleur">Travailleur</option>
                                        <option value="Chômeur">Chômeur</option>
                                    </select>

                                    @error('occup_actu_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label" for="utilisateur">Utilisateur</label>
                                    <select class="form-control @error('utilisateur') is-invalid @enderror"
                                        id="utilisateur" type="text" name="utilisateur" readonly disabled>
                                        <option value="{{ auth()->user()->id }}" selected>
                                            {{ auth()->user()->nom . ' ' . auth()->user()->prenoms }}
                                        </option>
                                    </select>

                                    @error('utilisateur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="programme">Programme</label>
                                    <select class="form-select @error('programme') is-invalid @enderror" id="programme"
                                        name="programme">
                                        <option selected="" disabled="" value="">S&eacute;lectionnez...
                                        </option>
                                        @forelse ($programmes as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->libelle_programme }}
                                            </option>
                                        @empty
                                        @endforelse
                                    </select>

                                    @error('programme')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br>
                            <div class="mb-3">
                                <div class="form-check">
                                    <div class="checkbox p-0">

                                    </div>

                                </div>
                            </div>
                            <button class="btn btn-secondary" type="reset">Annuler</button>&nbsp;
                            <button class="btn btn-primary" type="submit">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
