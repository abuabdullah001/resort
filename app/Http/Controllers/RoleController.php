<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::all();

        return view('roles.index', compact('roles'));
    }


    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:roles|max:255',
            'permissions' => 'nullable|array',
            'permissions.*' => 'nullable|exists:permissions,name'
        ]);

        $role = Role::create(['name' => $validatedData['name']]);

        if (!empty($validatedData['permissions'])) {
            $role->givePermissionTo($validatedData['permissions']);
        }

        return redirect()->route('roles.index')
            ->with('success', 'Role created successfully.');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $permissions = Permission::all();
        $role = Role::find($id);

        return view('roles.edit', compact('role', 'permissions'));
    }


    public function update(Request $request, string $id)
    {
       $role = Role::find($id);

       $validatedData = $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id . '|max:255',
            'permissions' => 'nullable|array',
            'permissions.*' => 'nullable|exists:permissions,name'
        ]);




        $role->update(['name' => $validatedData['name']]);

        $role->syncPermissions($validatedData['permissions'] ?? []);

        return redirect()->route('roles.index')
            ->with('success', 'Role updated successfully.');
    }


    public function destroy(string $id)
    {
       
       $role = Role::find($id);
       $role->delete();
        return redirect()->route('roles.index')
            ->with('success', 'Role deleted successfully.');
    }
}