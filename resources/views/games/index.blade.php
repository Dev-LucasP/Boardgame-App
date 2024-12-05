<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des jeux</title>
</head>
<body>
<h1>Liste des jeux de société</h1>
@if($games)
    <ul>
        @foreach($games as $game)
            <li>
                <strong>{{ $game['name'] }}</strong> - {{ $game['number_gamer'] }} joueurs - {{ $game['playing_time'] }} minutes - Complexité: {{ $game['complexity'] }}
            </li>
        @endforeach
    </ul>
@else
    <p>Aucun jeu trouvé.</p>
@endif
</body>
</html>
