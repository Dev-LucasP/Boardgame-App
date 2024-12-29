<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $titre ?? "Jeux de société"}}</title>
</head>
<body>

<x-menu></x-menu>

{{ $slot }}

<footer>
    <x-footer></x-footer>
</footer>
</body>
</html>
