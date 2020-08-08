<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>Ejemplo de slider</title>
</head>

<body>
    <header>
        <div class="bg-color-blue">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light bg-color-blue">
                    <a class="navbar-brand" href="#">Slider de prueba</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link @if (Route::has('slider_view')) active @endif" href="{{ Route('home') }}">Slider</a>
                            <a class="nav-link @if (Route::has('slider_view')) active @endif" href="{{ Route('slider_view') }}">CRUD</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        
    </header>
    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>

</body>
<script src="{{ asset('js/app.js') }}" defer></script>

</html>