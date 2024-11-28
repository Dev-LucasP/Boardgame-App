# Membres du Projet

- **MIONE Alexandre** - Chef de projet  
- **PIERREUSE Nathan** - Développeur  
- **PEREZ Lucas** - Développeur  

---

## Fonctionnement de l’API

Cette API permet de gérer des jeux de société (board-games). Elle utilise **Laravel** pour définir des routes et des contrôleurs afin de manipuler les données des jeux de société.

---

## Fonctionnalités de l'API

- **Authentification** : Utilise `auth:sanctum` pour sécuriser certaines routes.  
- **Ressource board-games** : Utilise un contrôleur (**BoardGameController**) pour gérer les opérations **CRUD** (Create, Read, Update, Delete) sur les jeux de société.

---

## Routes Disponibles

### Authentification
- **GET** `/api/user` : Récupère les informations de l'utilisateur authentifié.

### Ressource Board-Games
- **GET** `/api/board-games` : Récupère la liste des jeux de société.  
- **POST** `/api/board-games` : Crée un nouveau jeu de société.  
- **GET** `/api/board-games/{id}` : Récupère les détails d'un jeu de société spécifique.  
- **PUT** `/api/board-games/{id}` : Met à jour un jeu de société spécifique.  
- **DELETE** `/api/board-games/{id}` : Supprime un jeu de société spécifique.

---

## Utilisation de l'API

### Authentification
Pour accéder à certaines routes, vous devez être authentifié via **Sanctum**. Assurez-vous d'avoir un jeton d'authentification valide.

### Opérations CRUD sur Board-Games

#### Récupérer la liste des jeux de société
```bash
curl -X GET "http://notre_domaine/api/board-games" -H "Authorization: Bearer notre_jeton"

Créer un nouveau jeu de société

curl -X POST "http://notre-domaine/api/board-games" \
-H "Authorization: Bearer notre_jeton" \
-H "Content-Type: application/json" \
-d '{
  "name": "Nom du jeu",
  "description": "Description du jeu",
  "price": 29.99,
  "image": "url_de_l_image",
  "category": "Catégorie",
  "video": "url_de_la_video",
  "number_gamer": 4,
  "playing_time": 60,
  "complexity": 3,
  "rating": 4.5,
  "number_rating": 100,
  "published_date": "2023-01-01",
  "rank": 1
}'

Mettre à jour un jeu de société

curl -X PUT "http://notre-domaine/api/board-games/{id}" \
-H "Authorization: Bearer notre_jeton" \
-H "Content-Type: application/json" \
-d '{
  "name": "Nom du jeu mis à jour",
  "description": "Description mise à jour",
  "price": 34.99
}'

Supprimer un jeu de société

curl -X DELETE "http://notre-domaine/api/board-games/{id}" \
-H "Authorization: Bearer notre_jeton"