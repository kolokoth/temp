@extends('layout')

@section('contenu')
<form  method="post">
  {{csrf_field() }}
<p>  Nom    : <input type="text" name="Nom" placeholder="Nom"> </p>
@if($errors->has('Nom'))
<p> {{$errors->first('Nom')}}</p>
@endif
<p>  Prenom : <input type="text" name="Prenom" placeholder="Prenom"> </p>
<p>  Mdp    :  <input type="password" name="Mdp" placeholder="Mdp"> </p>
<p>  <input type="submit" name="inscription"> </p>
</form>
@endsection
