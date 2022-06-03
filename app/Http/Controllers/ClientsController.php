<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    function afficher_cli(){
        $aff=DB::table('clients')->get();
        return view('admin.gestion_des_clients',compact('aff'));
    }
    function ajouter_cli(Request $req){
        DB::table('clients')->insert([
            'cin'=>$req->cin,
            'nom'=>$req->nom,
            'prenom'=>$req->pre,
            'adresse'=>$req->adr,
            'telephone'=>$req->tel,
            'profession'=>$req->pro,
           'dateAjout'=>now()
         ]);
         return back();
    }
    function supprimer_cli($id){
        DB::table('clients')
            ->where('id',$id)
            ->delete();
            return back();
        }
        function mod_cli(Request $req){
            DB::table('clients')
            ->where('id',$req->id)
            ->update([
                'cin'=>$req->cin,
                'nom'=>$req->nom,
                'prenom'=>$req->pre,
                'adresse'=>$req->adr,
                'telephone'=>$req->tel,
                'profession'=>$req->pro,
               'dateAjout'=>now()
            ]);
            return back();
        }
}
