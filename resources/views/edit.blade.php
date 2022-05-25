@extends('layout.main')
@section('contenu')
<div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Formulaire d'insertion</h2>
    <h5 class="text-center mb-3">Veuillez insérer vos données dans le formulaire ci-dessous.</h5>
    <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_personnel.update', [$finds->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Matricule</label>
            <input type="text" class="form-control" value="{{ $finds->matricule }}" name="matricule" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" value="{{ $finds->nom }}" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" value="{{ $finds->prenom }}" name="prenom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="col-sm-3 control-label">GENRE</label>
            <div class="col-sm-12">
                <select class="form-select" type="text" aria-label="Default select example" value="{{ $finds->genre }}" name="genre">
                    <option selected> Genre </option>
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Feminin</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Poste</label>
            <input type="text" class="form-control" name="poste" value="{{ $finds->poste }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titre</label>
            <input type="text" class="form-control" name="titre" value="{{ $finds->titre }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Photo</label>
            <input type="file" class="form-control" name="photo" value="{{ $finds->photo }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="container d-flex">
            <div>
                <button type="submit" class="btn btn-success w-100">Modifier</button>
            </div> &nbsp;&nbsp;&nbsp;
        </div>
    </form>
</div>
@endsection