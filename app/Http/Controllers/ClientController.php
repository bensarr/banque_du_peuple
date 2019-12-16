<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        return view('client.add');
    }
    public function getAll()
    {
        $liste_clients=Client::paginate(5);
        return view('client.list',['liste_clients'=>$liste_clients]);
    }
    public function edit($id)
    {
        $client=Client::find($id);
        return view('client.edit',['client'=>$client]);
    }
    public function update(Request $request)
    {

        $client=Client::find($request->id);

        $client->nom=$request->nom;
        $client->prenom=$request->prenom;
        $client->adresse=$request->adresse;
        $client->telephone=$request->telephone;
        $result=$client->save();

        return redirect('/client/getAll');
    }
    public function delete($id)
    {   $client=Client::find($id);
        if($client!=null)
        {
            $client->delete();
        }
        return $this->getAll();
    }
    public function persist(Request $request)
    {
        $client=new Client();
        $client->user_id=Auth::user()->getAuthIdentifier();
        $client->nom=$request->nom;
        $client->prenom=$request->prenom;
        $client->adresse=$request->adresse;
        $client->telephone=$request->telephone;
        $result=$client->save();

        return view('client.add',['confirmation'=>$result]);
    }
}
