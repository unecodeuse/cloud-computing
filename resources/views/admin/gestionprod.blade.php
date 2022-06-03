@extends('layouts.idem')
@section('contenu')
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Ajouter un nouveau produit&nbsp;</h3>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p style="color: var(--dark);">Informations du produit</p>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('ajouterprod')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-group">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="last_name">
                                                        <strong>Photo</strong>
                                                    </label>
                                                        <input class="form-control" type="file" id="last_name"  name="photo">
                                                </div>
                                            </div>
        
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Nom</strong><br></label><input class="form-control" type="text" id="first_name-6" placeholder="John" name="nom"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Description</strong><br></label><input class="form-control" type="text" id="first_name-5" placeholder="John" name="description"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Quantité</strong><br></label><input class="form-control" type="text" id="first_name-2" placeholder="John" name="quantite"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Prix unitaire</strong><br></label><input class="form-control" type="text" id="first_name-8" placeholder="John" name="prix_unitaire"></div>
                                        </div>
                                        <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" style="background: var(--dark);">Ajouter un produit</button></div>
                                    </form>
                                </div>
                            </div>
                            <div class="card shadow"></div>
                        </div>
                    </div>
                    <div class="card shadow mb-5"></div>
                </div>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">GESTION DES PRODUITS</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p style="color: var(--dark);">Liste des produits</p>
                        </div>
                        <div class="card-body">
                            <div class="col">
                                <div class="text-md-right dataTables_filter" id="dataTable_filter-1"><button class="btn btn-primary" type="button" style="background: var(--dark);"><i class="fa fa-search"></i></button><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Quantité</th>
                                            <th>Prix unitaire</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($prod as $prod)
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30" src="{{asset('imaj/'.$prod->photo)}}">{{$prod->nom}}</td>
                                            <td>{{$prod->description}}</td>
                                            <td>{{$prod->quantite}}</td>
                                            <td>{{$prod->prix_unitaire}}</td>
                                            <td>
                                                <div class="form-group">
                                                    <button class="btn btn-group btn-sm" type="submit" style="background: var(--dark);">Editer</button>
                                                    <button class="btn btn-group btn-sm" type="submit" style="background: var(--dark);" onclick="if(confirm('Voulez-vous supprimer ce produit?')){document.getElementById('form-{{$prod->id}}').submit()}">Supprimer</button>
                                                    <form id="form-{{$prod->id}}" method="POST" action="{{route('supprimerprod', ['prod'=>$prod->id] )}}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete">
                                                    </form>
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
                            <div class="row">
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
            </div>
           @endsection