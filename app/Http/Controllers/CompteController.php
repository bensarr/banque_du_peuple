<?php

namespace App\Http\Controllers;
use App\Compte;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
        {
            $liste_clients=Client::all();
            return view('compte.add',['liste_clients'=>$liste_clients]);
        }
        public function getAll()
        {
            $liste_comptes=Compte::all();
            return view('compte.list',['liste_comptes'=>$liste_comptes]);
        }
        public function edit($id)
        {
            $compte=Compte::find($id);
            return view('compte.edit',['compte'=>$compte]);
        }
        public function update(Request $request)
        {

            $compte=Compte::find($request->id);

            $compte->numero=$request->numero;
            $compte->solde=$request->solde;
            $compte->client_id=$request->client_id;

            $result=$compte->save();

            return redirect('/compte/getAll');
        }
        public function delete($id)
        {   $compte=Compte::find($id);
            if($compte!=null)
            {
                $compte->delete();
            }
            return $this->getAll();
        }
        public function persist(Request $request)
        {
            $compte=new Compte();
            $compte->user_id=Auth::id();
            $compte->numero=$request->numero;
            $compte->solde=$request->solde;
            $compte->client_id=$request->client_id;
            $result=$compte->save();
            $liste_clients=Client::all();
            return view('compte.add',['confirmation'=>$result],['liste_clients'=>$liste_clients]);
        }
}
