<?php

namespace App\Http\Controllers;

use App\Models\roles;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = roles::all();
        return view('roles.index', compact('roles'));
    }
    
    public function create()
    {
        return view('roles.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ]);
    
        roles::create([
            'nama' => $request->nama
        ]);
    
        return redirect()->route('roles.index')->with('success', 'Role berhasil ditambahkan');
    }
    
    public function edit($id)
    {
        $role = roles::findOrFail($id);
        return view('roles.edit', compact('role'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required'
        ]);
    
        $role = roles::findOrFail($id);
        $role->update([
            'nama' => $request->nama
        ]);
    
        return redirect()->route('roles.index')->with('success', 'Role berhasil diupdate');
    }
    
    public function destroy($id)
    {
        $role = roles::findOrFail($id);
        $role->delete();
    
        return redirect()->route('roles.index')->with('success', 'Role berhasil dihapus');
    }
    
}
