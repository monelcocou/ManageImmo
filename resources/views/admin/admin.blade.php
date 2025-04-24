<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.4.3/dist/css/tom-select.bootstrap5.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.4.3/dist/js/tom-select.complete.min.js"></script>
    <title>@yield('title') | Administration</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Manage-Immo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @php
            $route = request()->route()->getName();
        @endphp

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a @class(['nav-link', 'active' => str_contains($route, 'property.')])
                   aria-current="page" href="{{ route('admin.property.index') }}">Les biens</a>
                <a @class(['nav-link', 'active' => str_contains($route, 'option.')])
                   href="{{ route('admin.option.index') }}">Les options</a>
            </div>
        </div>
    </div>
</nav>

<div class="container mt-5">

    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="my-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

<script>
    new TomSelect('select[multiple]', {
        plugins: ['remove_button'],
    });
</script>
</body>
</html>
