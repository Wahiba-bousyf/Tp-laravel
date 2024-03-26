@extends('annonces.master')
@section('title')
{{$annonce->titre}}
@endsection
@section('contenu')
<div class="container">
    <h1>Bonjoure dans la page de publication {{$annonce->id}}</h1>
    <div class="card">
        <div class="card-header">
            <strong>{{$annonce->titre}}</strong>
        </div>
        <div class="card-body">
            <p class="card-text">{{$annonce->des}}</p>
            <p class="card-title"><strong>Prix: </strong>{{$annonce->prix}} dhs</p>
            <p><strong>type</strong> :{{$annonce->etat}}</p>
            <p class="card-title"><strong>Ville: </strong>{{$annonce->ville}}</p>
            <p class="card-title"><strong>Superfacie: </strong>{{$annonce->superficie}}</p>
            <a href="{{route('home')}}" class="btn btn-primary">Back to home</a>
        </div>
    </div>
</div>
@endsection
