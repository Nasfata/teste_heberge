<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles=Role::all();
        return view('role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions=Permission::all();

        return view('role.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'name'=>'required',
            'permission'=>'required'
        ]);

        $role=Role::create(['name'=>$validated['name']]);
        if($request->has('permission')){
            $role->syncPermissions($request->permission);
        }

        return redirect()->route('role.index')->with('success','role creer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('role.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions=Permission::all();
        return view('role.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $validated=$request->validate([
            'name'=>'required',
            'permission'=>'required'
        ]);

        $role->update(['name'=>$validated['name']]);
        //if($request->has('permission')){
            $role->syncPermissions($validated['permission']);

        //}
        return redirect()->route('role.index')->with('success','role update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
