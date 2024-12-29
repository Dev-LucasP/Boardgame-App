<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $response = Http::get('http://127.0.0.1:8000/api/board-games');

        if ($response->successful()) {
            $games = $response->json();
            $titre = 'Liste des jeux de société';
            return view('games.index', compact('games', 'titre'));
        }

        return back()->withErrors('Erreur lors de la récupération des jeux.');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|string',
            'category' => 'nullable|string',
            'video' => 'nullable|string',
            'number_gamer' => 'nullable|integer',
            'playing_time' => 'nullable|integer',
            'complexity' => 'nullable|numeric',
            'rating' => 'nullable|numeric',
            'number_rating' => 'nullable|integer',
            'published_date' => 'nullable|date',
            'rank' => 'nullable|integer',
        ]);

    $response = Http::post('http://127.0.0.1:8000/api/board-games', $validatedData);

    if ($response->successful()) {
        return redirect()->route('games.index')->with('success', 'Jeu créé avec succès.');
    }

    return back()->withErrors('Erreur lors de la création du jeu.');
}

    public function create()
    {
        $titre = 'Créer un nouveau jeu';
        return view('games.create', compact('titre'));
    }

    public function destroy($id)
    {
        $response = Http::delete("http://127.0.0.1:8000/api/board-games/{$id}");

        if ($response->successful()) {
            return redirect()->route('games.index')->with('success', 'Board game deleted successfully.');
        } else {
            return redirect()->back()->withErrors('Failed to delete board game.');
        }
    }

public function edit($id)
{
    $response = Http::get("http://127.0.0.1:8000/api/board-games/{$id}");

    if ($response->successful()) {
        $boardGame = $response->json();
        $titre = 'Modifier le jeu';
        return view('games.edit', compact('boardGame', 'titre'));
    } else {
        return redirect()->back()->withErrors('Failed to fetch board game data.');
    }
}

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|string',
            'category' => 'nullable|string',
            'video' => 'nullable|string',
            'number_gamer' => 'nullable|integer',
            'playing_time' => 'nullable|integer',
            'complexity' => 'nullable|numeric',
            'rating' => 'nullable|numeric',
            'number_rating' => 'nullable|integer',
            'published_date' => 'nullable|date',
            'rank' => 'nullable|integer',
        ]);

        $response = Http::put("http://127.0.0.1:8000/api/board-games/{$id}", $validatedData);

        if ($response->successful()) {
            return redirect()->route('games.index')->with('success', 'Board game updated successfully.');
        } else {
            return redirect()->back()->withErrors('Failed to update board game.');
        }
    }

    public function show($id)
    {
        $response = Http::get("http://127.0.0.1:8000/api/board-games/{$id}");

        if ($response->successful()) {
            $games = $response->json();
            $titre = 'Liste des jeux de société';
            return view('games.show', compact('games', 'titre'));
        }

        return back()->withErrors('Erreur lors de la récupération des jeux.');
    }
}
