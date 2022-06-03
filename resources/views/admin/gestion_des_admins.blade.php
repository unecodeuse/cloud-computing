@extends('layouts.idem')
@section('contenu')
               <div class="container-fluid">
                    <h3 class="text-dark mb-4">Ajouter un nouvel admin</h3>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p style="color: var(--dark);">Informations de l'admin</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="/ajouter_un_admin">
                                        @csrf
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Nom</strong><br></label>
                                                <input class="form-control" type="text" id="first_name-6" placeholder="" name="nom" required></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Prenom</strong><br></label>
                                                <input class="form-control" type="text" id="first_name-5" placeholder="" name="pre" required></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Email</strong><br></label>
                                                <input class="form-control" type="email" id="first_name-2" placeholder="" name="ema" required></div>
                                        </div>
                                         <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Mot de passe</strong><br></label>
                                                <input class="form-control" type="password" id="first_name-8" placeholder="" name="mdp" required></div>
                                        </div>
                                        <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" style="background: var(--dark);">Ajouter un admin</button></div>
                                    </form>
                                </div>
                            </div>
                            <div class="card shadow"></div>
                        </div>
                    </div>
                </div>
                <p style="font-size: 30px;color: var(--dark);">GESTION DES ADMINS</p>
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p style="color: var(--dark);">Liste des administrateurs</p>
                        </div>
                        <div class="col">
                            <div class="text-md-right dataTables_filter" id="dataTable_filter-1"><button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Email</th>
{{--                                             <th>Mot de passe</th>
 --}}                                            <th>Date d'ajout</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($listeadmin as $listeadmin)
                                        <tr>
                                            <td>{{$listeadmin->nom}}</td>
                                            <td>{{$listeadmin->prenom}}</td>
                                            <td>{{$listeadmin->email}}</td>
                                            {{-- <td>{{$listeadmin->mdp}}</td> --}}
                                            <td>{{$listeadmin->dateAjout}}</td>
                                            <td> 
                                                <div class="btn-group">
                                                         <button class="btn " type="submit" style="background: var(--dark);">Editer</button>
                                                        <a class="btn btn-danger" href="/supprimer_un_admin/{{$listeadmin->id}}">Supprimer</a>
                                                 </div>
                                            </td>
                                           </tr>
                                        @endforeach
                                       
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="col">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection