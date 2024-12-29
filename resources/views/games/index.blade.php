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

        .page-content ul {
            list-style-type: none;
            padding: 0;
        }

        .page-content li {
            background-color: var(--primary-color);
            color: var(--button-text);
            padding: 1rem;
            margin-bottom: 0.5rem;
            border-radius: var(--button-border-radius);
            transition: background-color var(--transition-duration);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .page-content li:hover {
            background-color: var(--secondary-color);
        }

        .button-group {
            display: flex;
            gap: 0.5rem;
        }

        .button-group form {
            margin: 0;
        }

        button {
            padding: 0.5rem 1rem;
            background-color: var(--button-bg);
            color: var(--button-text);
            border: none;
            border-radius: var(--button-border-radius);
            cursor: pointer;
            transition: background-color var(--transition-duration);
        }

        button:hover {
            background-color: var(--button-hover-bg);
        }

        .create-button {
            display: inline-block;
            margin-bottom: 1rem;
            padding: 0.5rem 1rem;
            background-color: var(--button-bg);
            color: var(--button-text);
            border: none;
            border-radius: var(--button-border-radius);
            text-decoration: none;
            cursor: pointer;
            transition: background-color var(--transition-duration);
        }

        .create-button:hover {
            background-color: var(--button-hover-bg);
        }

        .delete-button {
            background-color: red;
        }

        .delete-button:hover {
            background-color: darkred;
        }

        .back-button {
            margin-top: 1rem;
            text-decoration: none;
        }
    </style>
    <div class="page-content">
        <h1>Liste des jeux de société</h1>
        <a href="{{ route('games.create') }}" class="create-button">Ajouter un nouveau jeu</a>
        @if($games)
            <ul>
                @foreach($games as $game)
                    <li>
                        <div>
                            <strong>{{ $game['name'] }}</strong> - {{ $game['number_gamer'] }} joueurs - {{ $game['playing_time'] }} minutes - Complexité: {{ $game['complexity'] }}
                        </div>
                        <div class="button-group">
                            <form action="{{ route('games.show', $game['id']) }}" method="GET">
                                @csrf
                                <button type="submit" class="show-button">Afficher</button>
                            </form>
                            <form action="{{ route('games.edit', $game['id']) }}" method="GET">
                                @csrf
                                <button type="submit" class="edit-button">Modifier</button>
                            </form>
                            <form action="{{ route('games.destroy', $game['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button">Supprimer</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Aucun jeu trouvé.</p>
        @endif
    </div>
</x-app>
