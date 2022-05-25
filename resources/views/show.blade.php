@extends('layout.main')
@section('contenu')
<h1 class="text-center">Détail du personnel {{$finds->id}}</h1>
<div class="card" style="width: 18rem; ">
    <img src="" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">DETAIL</h5>
      <p>Matricule:{{$finds->matricule}}</p>
      <p>Nom:{{$finds->nom}}</p>
      <p>Prenom:{{$finds->prenom}}</p>
      <p>Genre:{{$finds->genre}}</p>
      <p>Poste:{{$finds->poste}}</p>
      <p>Titre:{{$finds->titre}}</p>
      <a href="{{ route('gestion_personnel.index') }}" class="btn btn-primary">Valider</a>
    </div>
  </div>
@endsection