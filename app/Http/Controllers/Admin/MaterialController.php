<?php

namespace App\Http\Controllers\Admin;

use App\Models\Material;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MaterialController extends Controller
{

    public function index()
    {
        // Fetch all materials from the database
        $materials = Material::all();

        // Return the view with the materials data
        return view('admin.materials.index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Show the form to create a new material
        return view('admin.materials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create the material in the database
        Material::create([
            'name' => $request->name,
        ]);

        // Redirect to the material index with a success message
        return redirect()->route('admin.materials.index')->with('success', 'Material created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        // Show the details of a specific material
        return view('admin.materials.show', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        // Show the form to edit the material
        return view('admin.materials.edit', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material $material)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Update the material in the database
        $material->update([
            'name' => $request->name,
        ]);

        // Redirect to the material index with a success message
        return redirect()->route('admin.materials.index')->with('success', 'Material updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        // Delete the material from the database
        $material->delete();

        // Redirect to the material index with a success message
        return redirect()->route('admin.materials.index')->with('success', 'Material deleted successfully.');
    }
}
