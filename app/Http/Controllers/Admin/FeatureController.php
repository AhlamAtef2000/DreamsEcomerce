<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        return view('admin.features.index', compact('features'));
    }

    /**
     * Show the form for creating a new feature.
     */
    public function create()
    {
        return view('admin.features.create');
    }

    /**
     * Store a newly created feature in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'picture' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $feature = new Feature();
        $feature->title = $request->title;
        $feature->description = $request->description;

        if ($request->hasFile('picture')) {
            $feature->picture = $request->file('picture')->store('features', 'public');
        }

        $feature->save();

        return redirect()->route('admin.features.index')->with('success', 'Feature added successfully!');
    }

    /**
     * Show the form for editing the specified feature.
     */
    public function edit(Feature $feature)
    {
        return view('admin.features.edit', compact('feature'));
    }

    /**
     * Update the specified feature in storage.
     */
    public function update(Request $request, Feature $feature)
    {
        $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'picture' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $feature->title = $request->title ?? $feature->title;
        $feature->description = $request->description ?? $feature->description;

        if ($request->hasFile('picture')) {
            if ($feature->picture) {
                Storage::disk('public')->delete($feature->picture);
            }
            $feature->picture = $request->file('picture')->store('features', 'public');
        }

        $feature->save();

        return redirect()->route('admin.features.index')->with('success', 'Feature updated successfully!');
    }

    /**
     * Remove the specified feature from storage.
     */

    public function destroy(Feature $feature)
    {
        if ($feature->picture) {
            Storage::disk('public')->delete($feature->picture);
        }

        $feature->delete();

        return redirect()->route('admin.features.index')->with('success', 'Feature deleted successfully!');
    }
}
