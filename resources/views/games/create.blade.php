<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un nouveau jeu</title>
</head>
<body>
<h1>Ajouter un nouveau jeu</h1>
<form action="{{ route('games.store') }}" method="POST">
    @csrf
    <label for="name">Nom du jeu :</label>
    <input type="text" id="name" name="name" required><br>

    <label for="description">Description :</label>
    <textarea id="description" name="description"></textarea><br>

    <label for="price">Prix :</label>
    <input type="number" id="price" name="price" step="0.01"><br>

    <label for="image">Image :</label>
    <input type="text" id="image" name="image"><br>

    <label for="category">Catégorie :</label>
    <input type="text" id="category" name="category"><br>

    <label for="video">Vidéo :</label>
    <input type="text" id="video" name="video"><br>

    <label for="number_gamer">Nombre de joueurs :</label>
    <input type="number" id="number_gamer" name="number_gamer" required><br>

    <label for="playing_time">Durée (en minutes) :</label>
    <input type="number" id="playing_time" name="playing_time" required><br>

    <label for="complexity">Complexité :</label>
    <input type="number" id="complexity" name="complexity"><br>

    <label for="rating">Note :</label>
    <input type="number" id="rating" name="rating" step="0.1" min="0" max="10"><br>

    <label for="number_rating">Nombre d'avis :</label>
    <input type="number" id="number_rating" name="number_rating"><br>

    <label for="published_date">Date de publication :</label>
    <input type="date" id="published_date" name="published_date"><br>

    <label for="rank">Rang :</label>
    <input type="number" id="rank" name="rank"><br>

    <button type="submit">Ajouter</button>
</form>
</body>
</html>
