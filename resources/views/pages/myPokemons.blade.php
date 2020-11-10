@extends('template')

@section('content')
    <h1 class="mb-3">Voici mes pokemons</h1>
    <div class="row mb-1">
        @foreach ($data as $pokemon)
            <div class="col-4">
                <div class="card" style="width: 18rem; height : 30rem">
                <img src="{{$pokemon->image}}" class="card-img-top p-5" style="height: 20rem;" alt="...">
                    <div class="card-body">
                      <h3 class="card-text"> {{$pokemon->nom}}</h3>
                      <h4 class="card-text"> {{$pokemon->type}}</h4>
                      <p class="card-text"> {{$pokemon->niveau}}</p>
                    </div>
                    <form action="/delete/{{$pokemon->id}}" method="post">
                        @csrf
                        <button type="submit" class="bg-danger text-white border border-none mx-auto mb-2 mt-3 w-25 p-1">DELETE</button>
                    </form>
                </div>
            </div>
            @if ($loop->iteration % 3 == 0)
            </div>
            <div class="row mb-1">
            @endif
        @endforeach
    </div>
    @include('partials.buttonAdd')
@endsection