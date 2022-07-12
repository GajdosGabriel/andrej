<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        {{-- Navbar --}}
        <nav class="navbar navbar-dark py-0 bg-primary navbar-expand-lg py-md-0">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">Test</a>
                <button class="navbar-toggler mt-1" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="navbar-collapse collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item py-0"><a href="{{ route('user.index') }}" class="nav-link">All Users</a></li>
                        <li class="nav-item py-0"><a href="{{ route('user.create') }}" class="nav-link">New User</a></li>
                    </ul>
                </div>
            </div>

        </nav>


        <main class="py-4">
            <div class="container-fluid py-3">
                <div class="row">
                    @yield('content')
                </div>
            </div>

        </main>
    </div>
</body>

</html>
