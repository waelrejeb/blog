@extends('master')
@section('content')
<div></div>

<form method="post"  action="{{route('post_ajouter_Livre')}}" >

   @csrf
    <ul>
        <li>
        <label>titre:</label>
            <input type="text" name="titre" value="{{old('titre')}}" required>
            @error('titre')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </li>
         <li>
        <label>auteur:</label>
            <input type="text" name="auteur" value="{{old('auteur')}}" required>
            </li>
             <li>
        <label>nbre de pages:</label>
            <input type="text" name="nbre_pages" value="{{old('nbre_page')}}" required>
            </li>
         <li>
        <label>description:</label>
        <textarea name="description"   value="{{old('description')}}"   required></textarea>
          
        </li>
        
         <li>
      
            <input type="submit" value ="Ajouter">
        </li>


    </ul>
</form>
@endsection
   