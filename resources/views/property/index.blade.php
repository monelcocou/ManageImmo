@extends('base')
@section('title', 'Tous nos biens')

@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <form action="" method="get" class="container d-flex gap-2">
            <input type="number" placeholder="Surface Minimum" class="form-control" name="surface"
                   value="{{ $input['surface'] ?? '' }}"/>
            <input type="number" placeholder="Nombre de pièces Minimum" class="form-control" name="rooms"
                   value="{{ $input['rooms'] ?? '' }}"/>
            <input type="number" placeholder="Budget Maximum" class="form-control" name="price"
                   value="{{ $input['price'] ?? '' }}"/>
            <input type="text" placeholder="Mot clé" class="form-control" name="title"
                   value="{{ $input['title'] ?? '' }}"/>

            <button class="btn btn-primary btn-sm flex-grow-0">Rechercher</button>
        </form>

    </div>

    <div class="container">
        <div class="row">
            <div class="row">
                @forelse ($properties as $property)
                    <div class="col-3 mb-4">
                        @include('property.card')
                    </div>
                @empty
                    <div class="col">
                        <h3> Aucun bien repond a vos criteres de recherche </h3>
                    </div>
                @endforelse
            </div>
        </div>


        <div class=" my-4">
            {{ $properties->links() }}
        </div>
    </div>

@endsection
