<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    </head>
    <body>
        <header>
            <a href="/books">home</a>
            <a href="/books/create">create</a>
        </header>

        <main>
            {{ $slot }}
        </main>

        <footer>

        </footer>
    </body>
</html>
