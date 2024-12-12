<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\ProjetRequest;

use App\Models\{
    Projet,
};

class ProjetController extends Controller
{
    public function index()
{
    // Récupérer tous les projets
    $projets = Projet::all();

    // Convertir le BLOB en base64 pour chaque projet
    foreach ($projets as $projet) {
        if ($projet->cover_image) {
            $projet->cover_image = base64_encode($projet->cover_image);
        }
    }

    return view('projets.index', compact('projets'));  // Passer les projets à la vue
}

    public function create() {}

    public function store()
    {
        $projet = Projet::all();
        $data = [
            'titre' => 'Les projets de ' . config('app.name'),
            'description' => 'l\'ensemble des projets de ' . config('app.name'),
            'projet' => $projet,
        ];
        return view('projets.show', $data);
    }

    public function show($id)
    {
        // Récupérer un projet avec l'ID
        $projet = Projet::findOrFail($id);  // Si le projet n'existe pas, une erreur 404 sera levée
    
        // Passer le projet à la vue
        return view('projets.show', compact('projet'));
    }


    public function edit() {}

    public function update() {}

    public function destroy() {}

    public function confirmDelete() {}
}
