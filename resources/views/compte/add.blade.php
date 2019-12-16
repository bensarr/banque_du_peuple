@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Formulaire D'Ajout De COMPTES</div>

                    <div class="card-body">
                        @if(isset($confirmation))
                            @if($confirmation==1)
                                <div class="alert alert-success">Compte Ajouté</div>
                            @else
                                <div class="alert alert-danger">Compte Non Ajouté</div>
                            @endif
                        @endif

                        <form method="post" action="{{route('persistcompte')}}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="numero" >Numero Compte</label>
                                <input class="form-control" type="text" name="numero" id="numero">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="solde">Solde Compte</label>
                                <input class="form-control" type="text" name="solde" id="solde">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="client_id">Choix Client</label>
                                <select class="form-control" type="text" name="client_id" id="client_id">
                                    <option value="0">Faites Votre choix</option>
                                    @foreach($liste_clients as $client)
                                        <option value="{{$client->id}}">{{$client->nom}} {{$client->prenom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Ajouter">
                                <input class="btn btn-danger" type="reset" name="annuler" id="annuler" value="Annuler">
                            </div>
                        </form>


                        GESTION DES COMPTES !!!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


