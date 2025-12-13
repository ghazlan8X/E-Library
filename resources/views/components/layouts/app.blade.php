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
            <div class="header">
                <a href="/">Dashboard</a>
                <a href="/books/create">Create</a>
                @guest
                    <a href="/login">Login</a>
                @endguest
                @auth
                    @livewire('logout')
                @endauth
            </div>
        </header>

        <main>
            {{ $slot }}
        </main>

        <footer>

        </footer>
    </body>
</html>
