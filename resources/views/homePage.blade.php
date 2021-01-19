<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        {{-- style --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <h1>HOME PAGE</h1>
        @foreach ($dresses as $key => $dress)
            <p>{{ $dress->marca }}</p>

        @endforeach


    </body>
</html>
