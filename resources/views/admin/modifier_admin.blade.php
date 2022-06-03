@extends('layouts.idem')
@section('contenu')
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Ajouter un nouvel immeuble</h3>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p style="color: var(--dark);">Informations de l'immeuble</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="/ajouter_un_immeuble">
                                        @csrf
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Nom</strong><br></label>
                                                <input class="form-control" type="text" id="first_name-6" placeholder="" name="nom" required></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Adresse</strong><br></label>
                                                <input class="form-control" type="text" id="first_name-5" placeholder="" name="adr" required></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Nombre d'appartements</strong><br></label>
                                                <input class="form-control" type="number" id="first_name-2" placeholder="" name="nbr" required></div>
                                        </div>
                                     <div class="form-group"><button class="btn btn-sm" type="submit" style="background: var(--dark);">Ajouter un immeuble</button></div>
                                    </form>
                                </div>
                            </div>
                            <div class="card shadow"></div>
                        </div>
                    </div>
                    <div class="card shadow mb-5"></div>
                </div>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">GESTION DES IMMEUBLES</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p style="color: var(--dark);">Liste des immeubles</p>
                        </div>
                        <div class="col">
                            <div class="text-md-right dataTables_filter" id="dataTable_filter-1"><button class="btn btn-primary" type="button" style="background: var(--dark);"><i class="fa fa-search"></i></button><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Adresse</th>
                                            <th>Nombre d'appartements</th>
                                            <th>Date d'ajout</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($aff as $aff)
                                        <tr>
                                            <td>{{$aff->nom}}</td>
                                            <td>{{$aff->adresse}}</td>
                                            <td>{{$aff->nbreAppartements}}</td>
                                            <td>{{$aff->dateAjout}}</td> 
                                            
                                            <td>
                                                <div class="btn-group">
                                                    <button href="/modifier_un_admin" data-bs-toggle="modal" data-bs-target="#addNewTask"
                                                    data-id="{{$aff->id}}"  data-nom="{{$aff->nom}}"data-adresse="{{$aff->adresse}}"
                                                    data-nbreAppartements="{{$aff->nbreAppartements}}" data-dateAjout="{{$aff->dateAjout}}" style="background: var(--dark);">Editer</button>
{{--                                                     <button class="btn " type="submit" style="background: var(--dark);" onclick="if(confirm('Voulez-vous supprimer cet immeuble?')){document.getElementById('form-{{$emp->id}}').submit()}">Supprimer</button>
 --}}                                                    
                                                    <a class="btn btn-danger" href="/supprimer_un_immeuble/{{$aff->id}}">Supprimer</a>
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