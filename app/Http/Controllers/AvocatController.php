<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AvocatController extends Controller
{
    function afficher_avo(){
        $aff=DB::table('avocats')->get();
        return view('admin.gestion_des_avocats',compact('aff'));
    }
    function ajouter_avo(Request $req){
        DB::table('avocats')->insert([
            'nom'=>$req->nom,
            'prenom'=>$req->pre,
            'adresse'=>$req->adr,
            'numTel1'=>$req->tel1,
            'numTel2'=>$req->tel2,
            'numTel3'=>$req->tel3,
            'numAutorisation'=>$req->num,
            'dateAjout'=>now()
         ]);
         return back();
    }
    function supprimer_avo($id){
        DB::table('avocats')
            ->where('id',$id)
            ->delete();
            return back();
        }
}
