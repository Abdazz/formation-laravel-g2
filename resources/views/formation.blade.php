<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <h1>Bienvenue à la formation</h1>
        <form method="post" action="/users">
            @csrf
            <button type="submit">Valider</button>
        </form>
    </body>
</html>
