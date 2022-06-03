<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImmeubleController extends Controller
{
    function afficher_imm(){
        $aff=DB::table('immeubles')->get();
        return view('admin.gestion_des_immeubles',compact('aff'));
    }
    function ajouter_imm(Request $req){
        DB::table('immeubles')->insert([
            'nom'=>$req->nom,
            'adresse'=>$req->adr,
            'nbreAppartements'=>$req->nbr,
            'dateAjout'=>now()
         ]);
         return back();
    }
    function supprimer_imm($id){
        DB::table('immeubles')
            ->where('id',$id)
            ->delete();
            return back();
        }
        function mod_imm(Request $req){
            DB::table('immeubles')
            ->where('id',$req->id)
            ->update([
                'nom'=>$req->nom,
                'adresse'=>$req->adr,
                'nbreAppartements'=>$req->nbr,
                'dateAjout'=>now()
            ]);
            return back();
        }
}
