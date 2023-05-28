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
                        <form class="needs-validation" enctype="multipart/form-data" method="POST"
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
                            </div><br><br>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="lieu_naiss_demandeur">Lieu de naissance demandeur</label>
                                    <select class="form-control @error('lieu_naiss_demandeur') is-invalid @enderror"
                                        id="lieu_naiss_demandeur" name="lieu_naiss_demandeur"
                                        value="{{ old('lieu_naiss_demandeur') }}"
                                        @if (old('lieu_naiss_demandeur') != '') {{ 'selected' }} @endif>
                                        <option selected="" disabled="" value="">S&eacute;lectionnez le lieu de
                                            naissance</option>
                                        <option value='KONG'>KONG</option>
                                        <option value='ODIENNE'>ODIENNE</option>
                                        <option value='KOROGHO'>KOROGHO</option>
                                        <option value='TOUGBO'>TOUGBO</option>
                                    </select>

                                    @error('lieu_naiss_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="sexe_demandeur">Sexe</label>
                                    <select class="form-select @error('sexe_demandeur') is-invalid @enderror"
                                        id="sexe_demandeur" name="sexe_demandeur" value="{{ old('sexe_demandeur') }}"
                                        @if (old('sexe_demandeur') != '') {{ 'selected' }} @endif>
                                        <option selected="" disabled="" value="">S&eacute;lectionnez...</option>
                                        <option value="FEMME">FEMME</option>
                                        <option value="HOMME">HOMME</option>
                                    </select>

                                    @error('sexe_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label" for="sp_lieu_naiss_demandeur">S/P Lieu de naissance</label>
                                    <select class="form-control @error('sp_lieu_naiss_demandeur') is-invalid @enderror"
                                        id="sp_lieu_naiss_demandeur" name="sp_lieu_naiss_demandeur"
                                        value="{{ old('sp_lieu_naiss_demandeur') }}"
                                        @if (old('sp_lieu_naiss_demandeur') != '') {{ 'selected' }} @endif>
                                        <option selected="" disabled="" value="">Choisir la
                                            Sous-préfecture de
                                            naissance</option>
                                        <option value='KONG'>KONG</option>
                                        <option value='ODIENNE'>ODIENNE</option>
                                        <option value='KOROGHO'>KOROGHO</option>
                                        <option value='TOUGBO'>TOUGBO</option>
                                    </select>
                                    @error('sp_lieu_naiss_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br><br>
                            <div class="row g-3">
                                <div class="col-md-4" id="divNation">
                                    <label class="form-label" for="nationalite_demandeur">Nationalit&eacute;
                                        demandeur</label>
                                    <select class="form-control @error('nationalite_demandeur') is-invalid @enderror"
                                        id="nationalite_demandeur" placeholder="Ivoiriennne" name="nationalite_demandeur"
                                        value="{{ old('nationalite_demandeur') }}"
                                        @if (old('nationalite_demandeur')) {{ 'selected' }} @endif>
                                        <option disabled value="" selected>Choisir la nationalité</option>
                                        <option value='IVOIRIENNE'>IVOIRIENNE</option>
                                        <option value='RESSORTISSANT CEDEAO'>RESSORTISSANT CEDEAO</option>
                                        <option value='RESSORTISSANT HORS CEDEAO'>RESSORTISSANT HORS CEDEAO</option>
                                    </select>
                                    @error('nationalite_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="handicap_demandeur">Handicap</label>
                                    <select class="form-control @error('handicap_demandeur') is-invalid @enderror"
                                        id="handicap_demandeur" name="handicap_demandeur">
                                        <option value="Non" selected>Non</option>
                                        <option value="Oui">Oui</option>
                                    </select>
                                    @error('handicap_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4" id="div_type_handicap">
                                    <label class="form-label" for="type_handicap_demandeur">Type d'Handicap</label>
                                    <select class="form-select @error('type_handicap_demandeur') is-invalid @enderror"
                                        id="type_handicap_demandeur" name="type_handicap_demandeur"
                                        value="{{ old('type_handicap_demandeur') }}"
                                        @if (old('type_handicap_demandeur')) {{ 'selected' }} @endif>
                                        <option selected="" disabled="" value="">S&eacute;lectionnez...
                                        </option>
                                        <option value='MALADIE INVALIDANTE'>MALADIE INVALIDANTE</option>
                                        <option value='HANDICAP MENTAL'>HANDICAP MENTAL</option>
                                        <option value='HANDICAP MOTEUR'>HANDICAP MOTEUR</option>
                                        <option value='HANDICAP PSYCHIQUE'>HANDICAP PSYCHIQUE</option>
                                        <option value='HANDICAP SENSORIEL'>HANDICAP SENSORIEL</option>
                                    </select>

                                    @error('type_handicap_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br><br>
                            <div class="row g-3">
                                <div class="col-md-4 mb-4">
                                    <label class="form-label" for="nature_piece_demandeur">Nature de pi&egrave;ce
                                        demandeur</label>
                                    <select class="form-control @error('nature_piece_demandeur') is-invalid @enderror"
                                        id="nature_piece_demandeur" placeholder="" name="nature_piece_demandeur"
                                        value="{{ old('nature_piece_demandeur') }}"
                                        @if (old('nature_piece_demandeur') != '') {{ 'selected' }} @endif>
                                        <option disabled selected>Choisir la nature</option>
                                        <option value='CNI'>CNI</option>
                                        <option value="ATTESTATION D'IDENTITE">ATTESTATION D'IDENTITE</option>
                                        <option value='PASSEPORT'>PASSEPORT</option>
                                        <option value='PERMIS DE CONDUIRE'>PERMIS DE CONDUIRE</option>
                                        <option value='AUTRE'>AUTRE</option>
                                    </select>
                                    @error('nature_piece_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="piece_demandeur">Pi&egrave;ce du demandeur</label>
                                    <input type="file"
                                        class="form-control @error('piece_demandeur') is-invalid @enderror"
                                        id="piece_demandeur" placeholder="" name="piece_demandeur"
                                        value="{{ old('piece_demandeur') }}" accept="document/*pdf">
                                    @error('piece_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" id="numpiece">N° Pi&egrave;ce du demandeur</label>
                                    <div class="input-group">
                                        <input class="form-control @error('numpiece') is-invalid @enderror"
                                            id="numpiece" type="text" placeholder="C00172363735" name="numpiece"
                                            value="{{ old('numpiece') }}" max="20">
                                    </div>
                                    @error('numpiece')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br><br>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="contact1_demandeur">Contact1 du demandeur</label>
                                    <div class="input-group">
                                        <input class="form-control @error('contact1_demandeur') is-invalid @enderror"
                                            id="contact1_demandeur" type="phone" placeholder="0172363735"
                                            name="contact1_demandeur" value="{{ old('contact1_demandeur') }}"
                                            pattern="[0-9]{10}" max="10"
                                            title="Uniquement un numero de 10 chiffres">
                                    </div>
                                    @error('contact1_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="contact2_demandeur">Contact2 du demandeur</label>
                                    <div class="input-group">
                                        <input class="form-control @error('contact2_demandeur') is-invalid @enderror"
                                            id="contact2_demandeur" type="phone" placeholder="0172363735"
                                            name="contact2_demandeur" value="{{ old('contact2_demandeur') }}"
                                            pattern="[0-9]{10}" max="10"
                                            title="Uniquement un numero de 10 chiffres">
                                    </div>
                                    @error('contact2_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br><br>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="lieu_rh_demandeur">Lieu r&eacute;sidence
                                        habituel</label>
                                    <input class="form-control @error('lieu_rh_demandeur') is-invalid @enderror"
                                        id="lieu_rh_demandeur" type="text" placeholder="Kong"
                                        name="lieu_rh_demandeur" value="{{ old('lieu_rh_demandeur') }}"
                                        @if (old('lieu_rh_demandeur')) {{ 'selected' }} @endif>
                                    @error('lieu_rh_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label class="form-label" for="sp_lieu_demandeur">Sous-prefecture de
                                        r&eacute;sidence</label>
                                    <select class="form-control @error('sp_lieu_demandeur') is-invalid @enderror"
                                        id="sp_lieu_demandeur" name="sp_lieu_demandeur"
                                        value="{{ old('sp_lieu_demandeur') }}"
                                        @if (old('sp_lieu_demandeur')) {{ 'selected' }} @endif>
                                        <option disabled value="" selected>Choisir la sous-prefecture</option>
                                        <option value='KONG'>KONG</option>
                                        <option value='ODIENNE'>ODIENNE</option>
                                        <option value='KOROGHO'>KOROGHO</option>
                                        <option value='TOUGBO'>TOUGBO</option>
                                    </select>
                                    @error('sp_lieu_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="nivetude_demandeur">Niveau &eacute;tude</label>
                                    <select class="form-control @error('nivetude_demandeur') is-invalid @enderror"
                                        id="nivetude_demandeur" name="nivetude_demandeur"
                                        value="{{ old('nivetude_demandeur') }}" id="nivetude_demandeur"
                                        @if (old('sp_lieu_demandeur')) {{ 'selected' }} @endif>
                                        <option disabled value="" selected>Choisir le niveau</option>
                                        <option value='NON SCOLARISE'>NON SCOLARISE</option>
                                        <option value='PRIMAIRE'>PRIMAIRE</option>
                                        <option value='SECONDAIRE GENERAL'>SECONDAIRE GENERAL</option>
                                        <option value='SECONDAIRE TECHNIQUE ET PROFESSIONNEL'>SECONDAIRE TECHNIQUE ET
                                            PROFESSIONNEL</option>
                                        <option value='SUPERIEUR'>SUPERIEUR</option>
                                    </select>
                                    @error('nivetude_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br>
                            <div class="row g-3" id="Div_diplome">
                                <div class="col-md-4" id="col_diplome">
                                    <label class="form-label" for="diplome_demandeur">Dipl&ocirc;me</label>
                                    <select class="form-control @error('diplome_demandeur') is-invalid @enderror"
                                        id="diplome_demandeur" name="diplome_demandeur"
                                        value="{{ old('diplome_demandeur') }}"
                                        @if (old('diplome_demandeur')) {{ 'selected' }} @endif>
                                        <option disabled selected>Choisir le dipôme</option>
                                        <option value='AUCUN'>AUCUN</option>
                                        <option value='CEPE'>CEPE</option>
                                        <option value='BEPC'>BEPC</option>
                                        <option value='BAC GENERAL'>BAC GENERAL</option>
                                        <option value='BAC TECHNIQUE'>BAC TECHNIQUE</option>
                                        <option value='BTS'>BTS</option>
                                        <option value='LICENCE'>LICENCE</option>
                                        <option value='MASTER'>MASTER</option>
                                    </select>
                                    @error('diplome_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4" id="Div_annee_diplo">
                                    <label class="form-label" for="annee_diplo_demandeur">Ann&eacute;&eacute;
                                        dipl&ocirc;me</label>
                                    <input type="date"
                                        class="form-control @error('annee_diplo_demandeur') is-invalid @enderror"
                                        id="annee_diplo_demandeur" name="annee_diplo_demandeur" min="2000-01-01">

                                    @error('annee_diplo_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4" id="Div_specialite">
                                    <label class="form-label" for="specialite_demandeur">Sp&eacute;cialit&eacute;</label>
                                    <input class="form-control @error('specialite_demandeur') is-invalid @enderror"
                                        id="specialite_demandeur" type="text" name="specialite_demandeur"
                                        value="{{ old('specialite_demandeur') }}"
                                        placeholder="Développeur d'applications"
                                        @if (old('specialite_demandeur')) {{ 'selected' }} @endif>

                                    @error('specialite_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br><br>

                            <div class="row g-3">
                                <div class="col-md-6 mb-6">
                                    <label class="form-label" for="pers_contact_urgent">Personne &agrave;
                                        contacter en urgence</label>
                                    <div class="input-group">
                                        <select class="form-control @error('pers_contact_urgent') is-invalid @enderror"
                                            id="pers_contact_urgent" placeholder="" name="pers_contact_urgent"
                                            value="{{ old('pers_contact_urgent') }}">
                                            <option disabled value="" selected>Choisir la personne</option>
                                            <option value='PERE'>PERE</option>
                                            <option value='MERE'>MERE</option>
                                            <option value='FRERE'>FRERE</option>
                                            <option value='SOEUR'>SOEUR</option>
                                            <option value='AUTRE'>AUTRE</option>
                                        </select>
                                    </div>
                                    @error('pers_contact_urgent')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="contact_pers">Contact de la personne</label>
                                    <div class="input-group">
                                        <input class="form-control @error('contact_pers') is-invalid @enderror"
                                            id="contact_pers" type="text" placeholder="0172363735"
                                            name="contact_pers" value="{{ old('contact_pers') }}" pattern="[0-9]{10}"
                                            max="10" title="Uniquement un numero de 10 chiffres">
                                    </div>
                                    @error('contact_pers')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div><br><br>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="validationCustom03">Statut</label>
                                    <select class="form-control @error('occup_actu_demandeur') is-invalid @enderror"
                                        id="validationCustom03" name="occup_actu_demandeur"
                                        value="{{ old('occup_actu_demandeur') }}"
                                        @if (old('occup_actu_demandeur')) {{ 'selected' }} @endif>
                                        <option value="" disabled selected>Choisir...</option>
                                        <!--<option value="Etudiant(e)">Etudiant(e)</option>
                                                                                                                                                            <option value="Travailleur">Travailleur</option>
                                                                                                                                                            <option value="Chômeur">Chômeur</option>-->
                                        <option value='EN ACTIVIT&Eacute;'>EN ACTIVIT&Eacute;</option>
                                        <option value='EN FORMATION'>EN FORMATION</option>
                                        <option value='AU CHÔMAGE'>AU CHÔMAGE</option>
                                    </select>

                                    @error('occup_actu_demandeur')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="col-md-4 mb-4">
                                    <label class="form-label" for="utilisateur">Utilisateur</label>
                                    <input class="form-control @error('utilisateur') is-invalid @enderror"
                                        id="utilisateur" type="text" name="utilisateur" readonly disabled
                                        {{-- value="{{ old('utilisateur') }}" --} value="{{ auth()->user()->id }}">
                                    {{-- <option value="{{ auth()->user()->id }}" selected> --}
                                    {{ auth()->user()->nom . ' ' . auth()->user()->prenoms }}
                                    {{-- </option> --}
                                    </select>

                                    @error('utilisateur')
                                        <div class="alert  alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}
                                <div class="col-md-4">
                                    <label class="form-label" for="programme">Programme</label>
                                    <select class="form-select @error('programme') is-invalid @enderror" id="programme"
                                        name="programme" value="{{ old('programme') }}"
                                        @if (old('programme')) {{ 'selected' }} @endif>
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
                            </div><br><br>
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
