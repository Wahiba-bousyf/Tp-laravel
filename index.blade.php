@extends('annonces.master')
@section('title')
home
@endsection
<style>
    span{
        display: flex;
    }
    .container{
        margin-top: 5%;
    }
</style>
@section('contenu')
<div class="container">
    <a href="{{route('create')}}"><button class="btn btn-primary">Ajouter une pub</button></a>
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success')}}
    </div>
    @endif
    <h1>Bonjour dans le site de immobillier</h1>
    <table class='table'>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Descreption</th>
                <th>Type</th>
                <th>Ville</th>
                <th>Superficie(m²)</th>
                <th>Etat</th>
                <th>Prix(dhs)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($annonces as $annonce )
                <tr>
                    <td>{{$annonce->titre}}</td>
                    <td>{{Str::limit($annonce->des,10)}}</td>
                    <td>{{$annonce->type}}</</td>
                    <td>{{$annonce->ville}}</</td>
                    <td>{{$annonce->superficie}}</</td>
                    <td>{{$annonce->etat}}</</td>
                    <td>{{$annonce->prix}}</</td>
                    <td>
                    <span>
                    <a href="{{route('edit',$annonce->id)}}">
                        <button class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                        </svg>
                        </button>
                    </a>
                    <a href="{{route('show',$annonce->id)}}"><button class="btn btn-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                        </svg>
                    </button>
                    </a>
                    <form id={{$annonce->id}} action="{{route('delete',$annonce->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button onclick="event.preventDefault(); if(confirm('etes vous daccorde pour la supprission?')) document.getElementById({{$annonce->id}}).submit();" class="btn btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                            </svg>
                        </button>
                    </form>
                </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
