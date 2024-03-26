@extends('annonces.master')
@section('title')
create page
@endsection
@section('contenu')
<div class="container">
    @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    <form action="{{route('store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="#" class="form-label">Titre</label>
            <input type="text" class="form-control" name="titre">
        </div>
        <div class="mb-3">
            <label for="#" class="form-label">Descreption</label>
            <textarea class="form-control" name="des"  rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="#" class="form-label">Etat:</label>
            <input type="radio" name="etat" value="Neuf">Neuf
            <input type="radio" name="etat" value="Ancien">Ancien
        </div>
        <div class="mb-3">
            <label for="#" class="form-label">Type</label>
            <select name="type" class="form-control form-control-lg">
                <option value="select une type" disabled selected='true'>select une type</option>
                <option value="Apartement">Apartement</option>
                <option value="Maison">Maison</option>
                <option value="Villa">Villa</option>
                <option value="Magasine">Magasine</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="#" class="form-label">prix</label>
            <input type="text" class="form-control" name="prix" >
        </div>
        <div class="mb-3">
            <label for="#" class="form-label">Ville</label>
            <input type="text" class="form-control" name="ville" >
        </div>
        <div class="mb-3">
            <label for="#" class="form-label">Superface</label>
            <input type="text" class="form-control" name="superficie" >
        </div>
        <button class='btn btn-primary'>Modifier</button>
    </form>
</div>
@endsection
