@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Formulaire D'Ajout De Clients</div>

                    <div class="card-body">
                        @if(isset($confirmation))
                            @if($confirmation==1)
                                <div class="alert alert-success">Client Ajouté</div>
                            @else
                                <div class="alert alert-danger">Client Non Ajouté</div>
                            @endif
                        @endif

                        <form method="post" action="{{route('persistclient')}}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Nom Client</label>
                                <input class="form-control" type="text" name="nom" id="nom">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Prenom Client</label>
                                <input class="form-control" type="text" name="prenom" id="prenom">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Adresse Client</label>
                                <input class="form-control" type="text" name="adresse" id="adresse">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Telephone</label>
                                <input class="form-control" type="text" name="telephone" id="telephone">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="envoyer" id="ajouter" value="Ajouter">
                                <input class="btn btn-danger" type="reset" name="envoyer" id="annuler" value="Annuler">
                            </div>
                        </form>


                        GESTION DES COMPTES !!!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


