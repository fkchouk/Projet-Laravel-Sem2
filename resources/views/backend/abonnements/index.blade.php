@extends('backend.app')
@section('content') 

<h1 class="title">Liste des offres</h1>
<ul class="breadcrumbs">
    <li><a href="#">Listes des offres</a></li>
    <li class="divider">/</li>
    <li><a href="#" class="active">Offres</a></li>
</ul>
<div  style="width: 1200px;">
<div class="card" style="padding: 40px;">
    <div class="content-data">

<div class="head">
    <h3></h3>
    <div class="menu">
        <button type="button" class="btn btn-info" routerLink="/admin/ajouter-gare" > Add offre </button>
    </div>
</div>

           
    
    


<table class="table">
    <thead>
        <tr>
          <th>#</th>
          <th></th>
          <th>Nom</th>
          <th>Lieu</th>
          <th>Adresse</th>
          <th>option</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        
        <tr >
          <td>1</td>
          <td></td>
          <td>
            
          </td>
          <td></td>
         
         <td> <button type="button" style="border: none;" data-toggle="modal" data-target="#exampleModal"><img src="assets/admin/images/edite.png" class="icon-img"> </button> 
            <button type="button" style="border: none;" ><img src="assets/admin/images/delete.png" class="icon-img" ></button></td>
        </tr>
        
      </tbody>
  </table>
</div>
</div>
</div>
@endsection

