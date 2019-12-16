@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Formulaire De Modification De Compte</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('updatecompte')}}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Identifiant Compte</label>
                                <input class="form-control" readonly="true" type="text" name="id" id="id" value="{{$compte->id}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Numero Compte</label>
                                <input class="form-control" type="text" name="numero" id="numero" value="{{$compte->numero}}">
                            </div>


                            <div class="form-group">
                                <label class="control-label">Solde Compte</label>
                                <input class="form-control" type="text" name="solde" id="solde" value="{{$compte->solde}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Client</label>
                                <input class="form-control" type="text" readonly="true" name="client_id" id="client_id" value="{{$compte->client_id}}">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="envoyer" id="ajouter" value="Envoyer">
                                <a class="btn btn-danger" href="{{route('getallcompte')}}">Annuler</a>
                            </div>
                        </form>


                        GESTION DES COMPTES !!!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


