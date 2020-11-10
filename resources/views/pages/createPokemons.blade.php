@extends('template')

@section('content')
    <h1>Creation :</h1>
    <form enctype="multipart/form-data" action="/newPokemon" method="post" style="display: flex; flex-direction: column; align-items : center;">
        @csrf
        Nom : <input type="text" name="nom" style="width: 20%" class="mb-3">
        Type : <input type="text" name="type" style="width: 20%" class="mb-3">
        Lvl : <input type="text" name="niveau" style="width: 20%" class="mb-5">
        Image : <input type="file" name="img" style="width: 20%" class="mb-5">
        <div>
            @include('partials.buttonAdd')
            @include('partials.buttonSee')
        </div>
    </form>
@endsection