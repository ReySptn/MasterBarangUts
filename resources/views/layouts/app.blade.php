<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer.INC</title>
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/home/Computer.inc.png') }}">
    @vite([
        'resources/sass/app.scss',
        'resources/css/app.css'
    ])
    @stack('css')
</head>
<body>
    @include('layouts.components.navbar')
    {{-- content --}}
    <div class="main-content">
       @yield('content')
    </div>



    @vite('resources/js/app.js')
    @stack('js-libraries')
    @stack('js')
</body>
</html>
