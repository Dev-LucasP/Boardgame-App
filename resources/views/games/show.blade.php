<x-app :titre="$titre">
    <style>
        :root {
            --primary-color: #333333;
            --secondary-color: #DAA520;
            --background-color: #f8f9fa;
            --text-color: #495057;
            --button-bg: #444444;
            --button-hover-bg: #555555;
            --button-text: #ffffff;
            --button-border-radius: 4px;
            --transition-duration: 0.3s;
        }

        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        .page-content {
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .page-content h1 {
            color: var(--secondary-color);
            font-size: 3rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .game-details {
            background-color: var(--primary-color);
            color: var(--button-text);
            padding: 1rem;
            border-radius: var(--button-border-radius);
            transition: background-color var(--transition-duration);
            text-align: left;
        }

        .game-details strong {
            display: block;
            margin-bottom: 0.5rem;
        }

        .game-details p {
            color: white;
            margin: 0.5rem 0;
        }

        .back-button {
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background-color: var(--button-bg);
            color: var(--button-text);
            text-decoration: none;
            border-radius: var(--button-border-radius);
            transition: background-color var(--transition-duration);
            display: inline-block;
            margin-bottom: 5rem;
        }

        .back-button:hover {
            background-color: var(--button-hover-bg);
        }
    </style>
    <div class="page-content">
        <h1>Détails du jeu</h1>
        <div class="game-details">
            <strong>Nom du jeu:</strong> <p>{{ $games['name'] }}</p>
            <strong>Description:</strong> <p>{{ $games['description'] }}</p>
            <strong>Prix:</strong> <p>{{ $games['price'] }} €</p>
            <strong>Image:</strong> <p>{{ $games['image'] }}</p>
            <strong>Catégorie:</strong> <p>{{ $games['category'] }}</p>
            <strong>Vidéo:</strong> <p>{{ $games['video'] }}</p>
            <strong>Nombre de joueurs:</strong> <p>{{ $games['number_gamer'] }}</p>
            <strong>Durée (en minutes):</strong> <p>{{ $games['playing_time'] }}</p>
            <strong>Complexité:</strong> <p>{{ $games['complexity'] }}</p>
            <strong>Date de publication:</strong> <p>{{ $games['published_date'] }}</p>
        </div>
        <a href="{{ route('games.index') }}" class="back-button">Retour à l'index</a>
    </div>
</x-app>
