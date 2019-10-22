@extends('master')
@section('content')
@section("title","page d'acceuil")
<h1>{{$livres->count()}} livres sur {{$livres->total()}} trouvées :</h1>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
                <th scope="col">Auteur</th>


      <th scope="col">nbre de pages</th>
        <th scope="col">Actions</th>


    </tr>
  </thead>
  <tbody>
  @foreach($livres as $livre)
    <tr>
      <th scope="row">{{$livre->id}}</th>
      <td>{{$livre->titre}}</td>
      <td>{{$livre->auteur}}</td>
      <td>{{$livre->nbre_page}}</td>
      <td>
       <a href="{{route('voirLivre',$livre->id)}}" class="btn btn-primary">voir</a>
       <a href="{{route('editerLivre',$livre->id)}}" class="btn btn-warning">editer</a>
       <a href="{{route('get_supprimer_Livre',$livre->id)}}" class="btn btn-danger">supprimer</a></td>
     
      </tr>
      @endforeach
  </tbody>

</table>
 {{ $livres->links() }}

 <p>&copy; Company 2017-2019</p>
@endsection
