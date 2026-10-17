<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::orderBy('is_active', 'desc')->orderBy('start_date', 'desc')->paginate(10);
        return view('admin.organizations.index', compact('organizations'));
    }

    public function create()
    {
        return view('admin.organizations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'is_active' => 'nullable|boolean',
            'description' => 'nullable|string',
            'achievement' => 'nullable|string',
            'order' => 'nullable|integer',
        ]);

        Organization::create($validated);
        return redirect()->route('admin.organizations.index')->with('success', 'Organisasi berhasil ditambahkan!');
    }

    public function edit(Organization $organization)
    {
        return view('admin.organizations.edit', compact('organization'));
    }

    public function update(Request $request, Organization $organization)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'is_active' => 'nullable|boolean',
            'description' => 'nullable|string',
            'achievement' => 'nullable|string',
            'order' => 'nullable|integer',
        ]);

        $organization->update($validated);
        return redirect()->route('admin.organizations.index')->with('success', 'Organisasi berhasil diperbarui!');
    }

    public function destroy(Organization $organization)
    {
        $organization->delete();
        return redirect()->route('admin.organizations.index')->with('success', 'Organisasi berhasil dihapus!');
    }
}
