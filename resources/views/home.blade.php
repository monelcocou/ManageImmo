@extends('base')

@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Agence Lorem Ipsum</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque eveniet hic impedit placeat
                provident rem vel. Dicta eaque hic id illo inventore minima molestias, non omnis saepe veritatis,
                voluptate?</p>
        </div>

    </div>


    <div class="container">
        <h2>Nos derniers biens</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col">
                    @include('property.card')
                </div>
            @endforeach
        </div>

    </div>
@endsection
