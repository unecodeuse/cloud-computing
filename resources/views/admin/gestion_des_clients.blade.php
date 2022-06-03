@extends('layouts.idem')
@section('contenu')
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Ajouter un nouvel client</h3>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p style="color: var(--dark);">Informations de l'client</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="/ajouter_un_client">
                                        @csrf
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>N ° CIN</strong><br></label>
                                                <input class="form-control" type="text" id="first_name-1" placeholder="" name="cin" required></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Nom</strong><br></label>
                                                <input class="form-control" type="text" id="first_name-6" placeholder="" name="nom" required></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Prenom</strong><br></label>
                                                <input class="form-control" type="text" id="first_name-5" placeholder="" name="pre" required></div>
                                        </div>
                                        
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Adresse</strong><br></label>
                                                <input class="form-control" type="text" id="first_name-1" placeholder="" name="adr" required></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Téléphone </strong><br></label>
                                                <input class="form-control" type="tel" id="first_name-2" placeholder="" name="tel" required></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Profession</strong><br></label>
                                                <input class="form-control" type="text" id="first_name-1" placeholder="" name="pro" required></div>
                                        </div>
                                        
                                        <div class="form-group"><button class="btn btn-sm" type="submit" style="background: var(--dark);">Ajouter un client</button></div>
                                    </form>
                                </div>
                            </div>
                            <div class="card shadow"></div>
                        </div>
                    </div>
                    <div class="card shadow mb-5"></div>
                </div>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">GESTION DES CLIENTS</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p style="color: var(--dark);">Liste des clients</p>
                        </div>
                        <div class="col">
                            <div class="text-md-right dataTables_filter" id="dataTable_filter-1"><button class="btn btn-primary" type="button" style="background: var(--dark);"><i class="fa fa-search"></i></button><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>N°CIN</th>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Adresse</th>
                                           <th>Telephone </th>
                                            <th>Profession</th>
                                            <th>Date d'ajout</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($aff as $aff)
                                        <tr>
                                            <td>{{$aff->cin}}</td>
                                            <td>{{$aff->nom}}</td>
                                            <td>{{$aff->prenom}}</td>
                                            <td>{{$aff->adresse}}</td>
                                            <td>{{$aff->telephone}}</td>
                                            <td>{{$aff->profession}}</td>
                                            <td>{{$aff->dateAjout}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn " type="submit" style="background: var(--dark);">Editer</button>
                                                    <a class="btn btn-danger" href="/supprimer_un_client/{{$aff->id}}">Supprimer</a>
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