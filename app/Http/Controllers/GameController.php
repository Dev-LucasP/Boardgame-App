<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

/**
 * GameController handles the CRUD operations for board games.
 */
class GameController extends Controller
{
    /**
     * Display a listing of the board games.
     *
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
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

    /**
     * Store a newly created board game in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Show the form for creating a new board game.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $titre = 'Créer un nouveau jeu';
        return view('games.create', compact('titre'));
    }

    /**
     * Remove the specified board game from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $response = Http::delete("http://127.0.0.1:8000/api/board-games/{$id}");

        if ($response->successful()) {
            return redirect()->route('games.index')->with('success', 'Board game deleted successfully.');
        } else {
            return redirect()->back()->withErrors('Failed to delete board game.');
        }
    }

    /**
     * Show the form for editing the specified board game.
     *
     * @param int $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
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

    /**
     * Update the specified board game in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
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

    /**
     * Display the specified board game.
     *
     * @param int $id
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
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
