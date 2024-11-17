<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller

{
    /* public function __construct()
    {
       //Ajoute une vérification de permission pour chaque action ajoute un middleware pour vérifier que l'utilisateur dispose des permissions adéquates pour chaque action. Par exemple, pour voir les permissions, l'utilisateur doit avoir la permission view permissions. 
        $this->middleware('permission:view permissions')->only('index', 'show');
        $this->middleware('permission:create permissions')->only('create', 'store');
        $this->middleware('permission:edit permissions')->only('edit', 'update');
        $this->middleware('permission:delete permissions')->only('destroy');
    } */
 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupère toutes les permissions
        $permissions = Permission::all();

        // Retourne la vue avec les permissions
        return view('permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retourne la vue pour créer une nouvelle permission
        return view('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valide les données du formulaire
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name',
            'description' => 'nullable|string|max:255',
        ]);

        // Crée une nouvelle permission
        Permission::create($validated);

        // Redirige vers la liste des permissions avec un message de succès
        return redirect()->route('permissions.index')->with('success', 'Permission créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Trouve la permission par son ID
        $permission = Permission::findOrFail($id);

        // Retourne la vue pour afficher la permission
        return view('permissions.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Trouve la permission par son ID
        $permission = Permission::findOrFail($id);

        // Retourne la vue pour éditer la permission
        return view('permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Valide les données du formulaire
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name,' . $id,
            'description' => 'nullable|string|max:255',
        ]);

        // Trouve la permission par son ID et la met à jour
        $permission = Permission::findOrFail($id);
        $permission->update($validated);

        // Redirige vers la liste des permissions avec un message de succès
        return redirect()->route('permissions.index')->with('success', 'Permission mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Trouve la permission par son ID et la supprime
        $permission = Permission::findOrFail($id);
        $permission->delete();

        // Redirige vers la liste des permissions avec un message de succès
        return redirect()->route('permissions.index')->with('success', 'Permission supprimée avec succès.');
    }
}
