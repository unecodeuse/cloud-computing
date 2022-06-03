<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitsCont extends Controller
{
    public function listproduits(){
        $prod=Produits::all();
        return view('gestionprod',compact('prod'));
    }
    public function ajouter(Request $request){
            if($request->hasFile('photo')){
                $file=$request->file('photo');
                $nomphoto=time().'_'.$file->getClientOriginalName();
                $file->move(\public_path("imaj/"),$nomphoto);
               /* $extension=$file->getClientOriginalExtension();
                $filename=time().'_'.$extension;
                $file->move('/img',$filename);
                $prod->photo=$filename;*/
                $prod=new Produits([
                    "nom"=>$request->nom,
                    "description"=>$request->description,
                    "quantite"=>$request->quantite,
                    "prix_unitaire"=>$request->prix_unitaire,
                    "photo"=>$nomphoto,
                ]);
                $prod->save();
             }
           /* $prod->nom=$request->input('nom');
            $prod->description=$request->input('description');
            $prod->quantite=$request->input('quantite');
            $prod->prix_unitaore=$request->input('prix_unitaire');*/
             return back()->with("Un produit a été ajouté avec succès!") ;
    }
    public function supprimer(Produits $prod){
        
        $prod->delete();
        return back()->with("Un produit supprimé avec succès");
    }
}
