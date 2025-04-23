<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ColorController extends Controller
{
    public function index()
    {
        // Fetch all colors and pass to the view
        $colors = Color::all();
        return view('admin.colors.index', compact('colors'));
    }

    public function create()
    {
        // Show form for creating a new color
        return view('admin.colors.create');
    }

    public function store(Request $request)
    {
        // Validate and store new color
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Color::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.colors.index')->with('success', 'Color created successfully.');
    }

    public function show($id)
    {
        // Show a specific color
        $color = Color::findOrFail($id);
        return view('admin.colors.show', compact('color'));
    }

    public function edit($id)
    {
        // Show form for editing a specific color
        $color = Color::findOrFail($id);
        return view('admin.colors.edit', compact('color'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the color
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $color = Color::findOrFail($id);
        $color->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.colors.index')->with('success', 'Color updated successfully.');
    }

    public function destroy($id)
    {
        // Delete the color
        $color = Color::findOrFail($id);
        $color->delete();

        return redirect()->route('admin.colors.index')->with('success', 'Color deleted successfully.');
    }
}
