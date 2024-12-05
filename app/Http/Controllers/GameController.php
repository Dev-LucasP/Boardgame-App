<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class GameController extends Controller
{
    public function index()
    {
        $response = Http::get('http://127.0.0.1:8000/api/board-games');

        if ($response->successful()) {
            $games = $response->json();
            return view('games.index', compact('games'));
        }

        return back()->withErrors('Erreur lors de la récupération des jeux.');
    }
}
