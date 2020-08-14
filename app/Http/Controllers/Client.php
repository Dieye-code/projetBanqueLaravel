<?php

namespace App\Http\Controllers;

use App\Client as AppClient;
use Facade\FlareClient\Http\Response as HttpResponse;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Client extends Controller
{
    public function add(){
        $data['title'] = "Ajout d'un Client";
        $data['clientMorals'] = AppClient::all();
        return view('client/add',$data);
    }

    public  function  insert(Request $request){

        $client = new \App\Client();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->adresse = $request->adresse;
        $client->telephone = $request->telephone;
        $a = $client->save();

        if($a){
            $data['title'] = "Liste des clients";
            $clients = DB::select('SELECT * FROM clients');
            return view("client/liste",['success'=>1,'clients'=>$clients]);
        }else {
            return view('client/add',["success"=>0]);
        }
    }
}
