@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liste Des Clients</div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th>Nom Client</th>
                                <th>Prénom Client</th>
                                <th>Adresse</th>
                                <th>Téléphone</th>
                                <th>ACTION</th>
                                <th>ACTION</th>
                            </tr>
                            @foreach($liste_clients as $client)
                                <tr>
                                    <td>{{$client->id}}</td>
                                    <td>{{$client->nom}}</td>
                                    <td>{{$client->prenom}}</td>
                                    <td>{{$client->adresse}}</td>
                                    <td>{{$client->telephone}}</td>
                                    <td><a class="btn btn-secondary" href="{{route('editclient',['id'=>$client->id])}}">Editer</a></td>
                                    <td><a class="btn btn-danger" href="{{route('deleteclient',['id'=>$client->id])}}" onclick="return confirm('Voulez vous Supprimer ?');">Supprimer</a></td>
                                </tr>
                            @endforeach
                        </table>
                        {{$liste_clients->links()}}
                        GESTION DES COMPTES !!!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


