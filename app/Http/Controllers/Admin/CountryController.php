<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
class CountryController extends Controller
{

    public function index()
    {
        $countries = Country::all();
        return view('admin.countries.index', compact('countries'));
    }

    public function create()
    {
        return view('admin.countries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:countries,name',
            'code' =>'required|string|max:255|unique:countries,code'
        ]);

        Country::create([
            'name' => $request->name,
            'code'=>$request->code

        ]);

        return redirect()->route('admin.countries.index')
                            ->with('success', 'Country created successfully.');
    }

    public function edit(Country $country)
    {
        return view('admin.countries.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:countries,name,' . $country->id,
            'code' =>'required|string|max:255|unique:countries,code'

        ]);

        $country->update([
            'name' => $request->name,
            'code'=>$request->code

        ]);

        return redirect()->route('admin.countries.index')
                            ->with('success', 'Country updated successfully.');
    }

    public function destroy($id)
    {
        $country = Country::find($id);

        if (!$country) {
            return redirect()->route('admin.countries.index')
                                ->with('error', 'Country not found.');
        }

        $country->delete();

        return redirect()->route('admin.countries.index')
                            ->with('success', 'Country deleted successfully.');
    }
}
