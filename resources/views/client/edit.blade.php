@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Formulaire De Modification De Clients</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('updateclient')}}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Identifiant Client</label>
                                <input class="form-control" readonly="true" type="text" name="id" id="id" value="{{$client->id}}">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Nom Client</label>
                                <input class="form-control" type="text" name="nom" id="nom" value="{{$client->nom}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Prenom Client</label>
                                <input class="form-control" type="text" name="prenom" id="prenom" value="{{$client->prenom}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Adresse Client</label>
                                <input class="form-control" type="text" name="adresse" id="adresse" value="{{$client->adresse}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Telephone</label>
                                <input class="form-control" type="text" name="telephone" id="telephone" value="{{$client->telephone}}">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="envoyer" id="ajouter" value="Envoyer">
                                <a class="btn btn-danger" href="{{route('getallclient')}}">Annuler</a>
                            </div>
                        </form>


                        GESTION DES COMPTES !!!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


