<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env('APP_NAME') }} </title>
</head>
<body>
    @if(auth()->check())
        {{ auth()->user()->name }} Está logado
    @endif
    
    @yield('content')
</body>
</html>