<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}">
    <title>Micro-tec</title>

    <link rel="stylesheet" href="{{ url('css/app.css') }}"/>

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ url('lib/bootstrap/dist/css/bootstrap.css') }}"  />
    <link rel="stylesheet" href="{{ url('lib/fontawesome/dist/css/fontawesome-all.css') }}"  />
    <link rel="stylesheet" href="{{ url('css/btn.css') }}"/>
    <link rel="stylesheet" href="{{ url('css/font.css') }}"  />
    <link rel="stylesheet" href="{{ url('css/dashboard.css') }}"  />
    <link rel="stylesheet" href="{{ url('css/layout.css') }}"  />
    <link rel="stylesheet" href="{{ url('css/site.css') }}"  />
    <link rel="stylesheet" href="{{ url('css/site.min.css') }}"  />

    {{-- Fonts --}}
    <link rel="stylesheet" href="{{ url('fonts/Heebo-Black.ttf') }}"  />
    <link rel="stylesheet" href="{{ url('fonts/Heebo-Regular.ttf') }}"  />
    <link rel="stylesheet" href="{{ url('fonts/Heebo-ExtraBold.ttf') }}"  />

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{ url('Dashboard') }}">
                <img id="logo" src="{{ url('images/m-logo.png') }}">
            </a>
        </div>
        <button class="d-block d-sm-none navbar-toggler" type="button" data-toggle="collapse" data-target="#topmain" aria-controls="topmain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topmain">
            <ul class="d-block d-sm-none navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="">MAIN</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="container-fluid">
    <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-faded sidebar ">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active bt">MAIN
                    <span class="sr-only"></span>
                </a>
            </li>
        </ul>
    </nav>
    @yield('content')
</div>
</body>
    {{--<script src="{{ url('lib/jquery/dist/jquery.min.js') }}"></script>--}}
    {{--<script src="{{ url('lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>--}}
    <script src="{{ url('lib/bootbox/dist/bootbox.min.js') }}"></script>
    <script src="{{ url('js/app.js') }}"></script>
    @yield('script')
</html>