<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    function connecter(Request $req){
        $admin=DB::table('admins')
                ->where([
                    'email'=>$req->ema
                ])->first();
                        if($admin){
            if(Hash::check($req->mdp, $admin->mdp)){
                $req->session()->put('auth',$admin->id);
                return redirect('/dashboard');
            } 
            else{
                return back()->with('error','Le mot de passe est incorrect');
            }

        }
        else{
            return back()->with('error','Cet email n\'existe pas');
        }
    }
    function afficher_adm(){
        $listeadmin=DB::table('admins')->get();
        return view('admin.gestion_des_admins',compact('listeadmin'));
    }
    function ajouter_adm(Request $req){
    
        $admin= DB::table('admins')->insert([
            'nom'=>$req->nom,
            'prenom'=>$req->pre,
            'email'=>$req->ema,
            'mdp'=> Hash::make($req->mdp),
            'dateAjout'=>now()
        ]);
        return back();
    }
        function deconnecter(){
            if(session()->has('auth')){
                session()->pull('auth');
                return redirect('login');
            }
        } 
        function supprimer_adm($id){
            DB::table('admins')
                ->where('id',$id)
                ->delete();
                return back();
            }
            function modifier_admin(Request $req){
                DB::table('admins')
                    ->where('id',$req->id)
                    ->update([
                        'nom'=>$req->no,
                        'prenom'=>$req->pr,
                        'email'=>$req->em,
                        'mdp'=> Hash::make($req->md) 
                    ]);
                    return back();
                }

}
