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

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 1rem;
            font-weight: bold;
        }

        input, textarea, select {
            margin-top: 0.5rem;
            padding: 0.5rem;
            border: 1px solid var(--primary-color);
            border-radius: var(--button-border-radius);
            width: 100%;
            max-width: 400px;
        }

        .maj button {
            margin-top: 1.5rem;
            padding: 0.5rem 1rem;
            background-color: var(--button-bg);
            color: var(--button-text);
            border: none;
            border-radius: var(--button-border-radius);
            cursor: pointer;
            transition: background-color var(--transition-duration);
            margin-bottom: 5rem;
        }

            .maj button:hover {
            background-color: var(--button-hover-bg);
        }
    </style>
    <div class="page-content">
        <h1>Modifier le jeu</h1>
        <form action="{{ route('games.update', $boardGame['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Nom du jeu :</label>
            <input type="text" id="name" name="name" value="{{ $boardGame['name'] }}" required><br>

            <label for="description">Description :</label>
            <textarea id="description" name="description">{{ $boardGame['description'] }}</textarea><br>

            <label for="price">Prix :</label>
            <input type="number" id="price" name="price" step="0.01" value="{{ $boardGame['price'] }}"><br>

            <label for="image">Image :</label>
            <input type="text" id="image" name="image" value="{{ $boardGame['image'] }}"><br>

            <label for="category">Catégorie :</label>
            <input type="text" id="category" name="category" value="{{ $boardGame['category'] }}"><br>

            <label for="video">Vidéo :</label>
            <input type="text" id="video" name="video" value="{{ $boardGame['video'] }}"><br>

            <label for="number_gamer">Nombre de joueurs :</label>
            <input type="number" id="number_gamer" name="number_gamer" value="{{ $boardGame['number_gamer'] }}" required><br>

            <label for="playing_time">Durée (en minutes) :</label>
            <input type="number" id="playing_time" name="playing_time" value="{{ $boardGame['playing_time'] }}" required><br>

            <label for="complexity">Complexité :</label>
            <input type="number" id="complexity" name="complexity" value="{{ $boardGame['complexity'] }}"><br>

            <label for="published_date">Date de publication :</label>
            <input type="date" id="published_date" name="published_date" value="{{ $boardGame['published_date'] }}"><br>
            <div class="maj">
                <button type="submit">Mettre à jour</button>
            </div>
        </form>
    </div>
</x-app>
