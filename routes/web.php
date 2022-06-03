<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AvocatController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\EmployesCont;
use App\Http\Controllers\ImmeubleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/liste_des_immeubles',[ImmeubleController::class,'afficher_imm']);
Route::post('/ajouter_un_immeuble',[ImmeubleController::class,'ajouter_imm']);
Route::get('/supprimer_un_immeuble/{id}',[ImmeubleController::class,'supprimer_imm']);


Route::get('/liste_des_avocats',[AvocatController::class,'afficher_avo']);
Route::post('/ajouter_un_avocat',[AvocatController::class,'ajouter_avo']);
Route::get('/supprimer_un_avocat/{id}',[AvocatController::class,'supprimer_avo']);

Route::get('/liste_des_admins',[AdminController::class,'afficher_adm']);
Route::post('/ajouter_un_admin',[AdminController::class,'ajouter_adm']);
Route::get('/supprimer_un_admin/{id}',[AdminController::class,'supprimer_adm']);

Route::get('/login',function(){
    return view('admin.login');
});
Route::post('/connexion',[AdminController::class,'connecter']);
Route::get('/deconnexion',[AdminController::class,'deconnecter']);

Route::get('/dashboard',[ DashController::class,'dash'])->middleware('conn');
Route::get('/liste_des_clients',[ClientsController::class,'afficher_cli']);
Route::post('/ajouter_un_client',[ClientsController::class,'ajouter_cli']);
Route::get('/supprimer_un_client/{id}',[ClientsController::class,'supprimer_cli']);

/* 

Route::get('/',[ DashController::class,'dash'])->name("dashboard");
Route::get('/gad', function () {
    return view('gestionadmin');
})->name("gestionadmin");
Route::get('/gcom', function () {
    return view('gestioncomm');
})->name("gestioncomm");

Route::get('/gprod',[ ProduitsCont::class,'listproduits'])->name("gestionprod");
Route::post('/ajprod',[ ProduitsCont::class,'ajouter'])->name("ajouterprod");
Route::delete('/supprod/{prod}',[ ProduitsCont::class,'supprimer' ])->name("supprimerprod");

Route::get('/gemp',[ EmployesCont::class,'listemployes' ])->name("gestionemp");
Route::post('/ajemp',[ EmployesCont::class,'ajouter' ])->name("ajouteremp");

Route::get('/iad', function () {
    return view('insadmin');
})->name('insnadmin');
Route::post('/ajad',[ AdminController::class,'inscriad'])->name("ajouterad");
Route::get('/cad', function () {
    return view('conadmin');
})->name('conadmin');
 
 */