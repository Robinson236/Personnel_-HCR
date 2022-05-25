@extends('layout.main')
@section('contenu')

<div class="container">
    <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Liste du personnel</h2>
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">Numéro</th>
                <th scope="col">Matricule</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Genre</th>
                <th scope="col">Poste</th>
                <th scope="col">Titre</th>
                <th scope="col">Photo</th>
                <th colspan="3">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($personnels as $personnel)
            <tr>
                <th scope="row">{{$personnel->id}}</th>
                <td>{{$personnel->matricule}}</td>
                <td>{{$personnel->nom}}</td>
                <td>{{$personnel->prenom}}</td>
                <td>{{$personnel->genre}}</td>
                <td>{{$personnel->poste}}</td>
                <td>{{$personnel->titre}}</td>
                <td><img src="{{asset('storage').'/'.$personnel->photo}}" style= "width:15%"  alt=""></td>
                <td> <a class="button" href="{{route('gestion_personnel.show', [$personnel->id]) }}"><img src="{{ asset('Images/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_personnel.edit', [$personnel->id]) }}"><img src="{{ asset('Images/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_personnel/'.$personnel->id) }}"><img src="{{ asset('Images/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>

@endsection