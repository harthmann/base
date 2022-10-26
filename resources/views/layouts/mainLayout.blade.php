<!DOCTYPE html>
<html lang="pt-br">
<head>
    @php
        $version = time();
    @endphp
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')

    @include('styles.styles')
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

@include('scripts.scripts')
</body>
</html>