<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /* public function __construct()
    {
        $this->middleware('permission:view roles')->only('index', 'show');
        $this->middleware('permission:create roles')->only('create', 'store');
        $this->middleware('permission:edit roles')->only('edit', 'update');
        $this->middleware('permission:delete roles')->only('destroy');
    } */

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::findOrFail($id);
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        return view('roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    /* public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $id,
            'permissions' => 'array|nullable',
        ]);

        $role = Role::findOrFail($id);
        $role->update(['name' => $validated['name']]);

        if ($request->has('permissions')) {
            $role->syncPermissions($request->permissions);
        }

        return redirect()->route('roles.index')->with('success', 'Rôle mis à jour avec succès.');
    } */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Rôle supprimé avec succès.');
    }




/*     public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255|unique:roles,name',
        'permissions' => 'array|nullable',
        'permissions.*' => 'string|exists:permissions,name', // S'assurer que chaque permission existe par son nom
    ]);

    $role = Role::create(['name' => $validated['name']]);

    if ($request->has('permissions')) {
        $role->syncPermissions($request->permissions);
    }

    return redirect()->route('roles.index')->with('success', 'Rôle créé avec succès.');
} */

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255|unique:roles,name',
        'permissions' => 'array|nullable',
        'permissions.*' => 'string|exists:permissions,name', // S'assurer que chaque permission existe par son nom
    ]);

    $role = Role::create(['name' => $validated['name']]);

    if ($request->has('permissions')) {
        $role->syncPermissions($request->permissions);
    }

    return redirect()->route('roles.index')->with('success', 'Rôle créé avec succès.');
}

public function update(Request $request, string $id)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255|unique:roles,name,' . $id,
        'permissions' => 'array|nullable',
        'permissions.*' => 'string|exists:permissions,name', // S'assurer que chaque permission existe par son nom
    ]);

    $role = Role::findOrFail($id);
    $role->update(['name' => $validated['name']]);

    if ($request->has('permissions')) {
        $role->syncPermissions($request->permissions);
    }

    return redirect()->route('roles.index')->with('success', 'Rôle mis à jour avec succès.');
}

}
