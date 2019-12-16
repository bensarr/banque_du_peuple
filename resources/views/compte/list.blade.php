@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liste Des Comptes</div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Numero Compte</th>
                                <th>Solde Compte</th>
                                <th>Identifiant Client</th>
                                <th>Identifiant Utilisateur</th>
                                <th>ACTION</th>
                                <th>ACTION</th>
                            </tr>
                            @foreach($liste_comptes as $compte)
                                <tr>
                                    <td>{{$compte->numero}}</td>
                                    <td>{{$compte->solde}}</td>
                                    <td>{{$compte->client_id}}</td>
                                    <td>{{$compte->user_id}}</td>
                                    <td><a class="btn btn-secondary" href="{{route('editcompte',['id'=>$compte->id])}}">Editer</a></td>
                                    <td><a class="btn btn-danger"href="{{route('deletecompte',['id'=>$compte->id])}}" onclick="return confirm('Voulez vous Supprimer ?');">Supprimer</a></td>
                                </tr>
                            @endforeach
                        </table>

                        GESTION DES COMPTES !!!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


