<?php

namespace App\Http\Controllers;

use App\Compte as AppCompte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Compte extends Controller
{
    public function  add()
    {
        $data['title'] = 'Ajout Compte';
        $data['clients'] = DB::select('SELECT * FROM clients');
        return view("compte/add", $data);
    }

    public function insert(Request $request)
    {
        $compte = new AppCompte();

        $compte->numero = $request->numero;
        $compte->cleRib = $request->clesRib;
        $compte->solde = $request->solde;
        $compte->idClient = $request->idClient;

        $a = $compte->save();

        if ($a) {
            $data['comptes'] = DB::select('SELECT c.id,c.numero,c.cleRib,c.solde,cl.prenom,cl.nom FROM clients cl, comptes c WHERE c.idClient=cl.id');
            
            $data['success'] = 1;
            $data['title'] = 'Liste des Comptes';
            return view('compte/liste', $data);
        } else {

            $data['clients'] = DB::select('SELECT * FROM clients');
            $data['success'] = 0;
            $data['title'] = 'Ajout Compte';
            return view('compte/add', $data);
        }
    }
}
