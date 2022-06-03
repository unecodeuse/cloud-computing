<?php

namespace App\Http\Controllers;

use App\Models\Employes;
use Illuminate\Http\Request;

class EmployesCont extends Controller
{
    public function listemployes(){
        $emp = Employes::orderBy("nom","asc")->get();
        return view("gestionemp",compact("emp"));
    }
    public function ajouter(Request $request){
        Employes::create([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "email"=>$request->email,
            "ddn"=>$request->ddn,
            "telephone"=>$request->telephone,
            "adresse"=>$request->adresse,
            "fonction"=>$request->fonction,
            "salaire"=>$request->salaire
        ]);
        return back()->with("Un nouvel employé ajouté avec succès");
    }
    public function supprimer(Employes $emp){

        $emp->delete();
        return back()->with("Un employé supprimé avec succès");
    }
}
