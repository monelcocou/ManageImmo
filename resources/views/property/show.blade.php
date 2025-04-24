@extends('base')

@section('title', $property->title)

@section('content')

    <div class="container mt-4">
        <h1>{{ $property->title }}</h1>
        <h4>{{ $property->rooms }} pièces - {{ $property->surface }} m²</h4>

        <div class="text-primary fw-bold" style="font-size: 3.5rem;">
            {{ number_format($property->price, thousands_separator: ' ') }} €
        </div>

        <hr>

        <div class="mt-4">
            <h4>Interessé par ce bien ?</h4>
            <form action="" method="post" class="vstack gap-3">
                @csrf
                <div class="row">
                    @include('shared.input', ['class'=>'col', 'label' => 'Prenom','name' => 'firstname'])
                    @include('shared.input', ['class'=>'col', 'label' => 'Nom','name' => 'lastname'])
                </div>

                <div class="row">
                    @include('shared.input', ['class'=>'col', 'label' => 'Telephone','name' => 'phone'])
                    @include('shared.input', ['class'=>'col', 'type' => 'email', 'label' => 'Email','name' => 'email'])
                </div>

                @include('shared.input', ['class'=>'col', 'type' => 'textarea', 'label' => 'Votre message','name' => 'message'])

                <div>
                    <button class="btn btn-primary">Nous contacter</button>
                </div>
            </form>
        </div>

        <div class="mt-4">
            <p>{!! nl2br($property->description) !!} </p>

            <div class="row">
                <div class="col-8">
                    <h2>Caractéristiques</h2>

                    <table class="table table-striped">
                        <tr>
                            <td>Surface habitable</td>
                            <td>{{ $property->surface }} m²</td>
                        </tr>

                        <tr>
                            <td>Pièces</td>
                            <td>{{ $property->rooms }} </td>
                        </tr>

                        <tr>
                            <td>Chambres</td>
                            <td>{{ $property->bedrooms }}</td>
                        </tr>

                        <tr>
                            <td>Etage</td>
                            <td>{{ $property->floor ?: 'Rez de chaussé' }} </td>
                        </tr>
                    </table>
                </div>

                <div class="col-4">
                    <h2>Spécificités</h2>
                    <ul class="list-group">
                        @foreach($property->options as $option)
                            <li class="list-group-item">
                                {{ $option->name }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
