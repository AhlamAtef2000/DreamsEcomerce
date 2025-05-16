<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingMethod;
use App\Models\Country;

class ShippingMethodController extends Controller
{

    public function index()
    {
        $shippingMethods=ShippingMethod::all();
        return view('admin.shippingMethods.index',compact('shippingMethods'));
    }
    public function edit($id)
    {
        $countries=Country::all();
        $shippingMethod = ShippingMethod::find($id);
        if (!$shippingMethod) {
            return redirect()->route('admin.shippingMethods.index')->with('error', 'Shipping method not found.');
        }
        return view('admin.shippingMethods.edit', compact('shippingMethod','countries'));
    }
    public function create()
    {
        $countries = Country::all();
        return view('admin.shippingMethods.create', compact('countries'));
    }
    public function update(Request $request, $id)
{
    // Validate input data
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'country_id' => 'required|exists:countries,id',
    ]);

    // Find the shipping method
    $shippingMethod = ShippingMethod::find($id);

    // Handle case where shipping method doesn't exist
    if (!$shippingMethod) {
        return redirect()->route('admin.shippingMethods.index')
                            ->with('error', 'Shipping method not found.');
    }

    // Update the shipping method
    $shippingMethod->update([
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'country_id' => $request->input('country_id'),
    ]);

    // Redirect with success message
    return redirect()->route('admin.shippingMethods.index')
                     ->with('success', 'Shipping method updated successfully.');
}


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'country_id' => 'required|exists:countries,id',
        ]);
        ShippingMethod::create([
            'name' => $request->name,
            'price' => $request->price,
            'country_id' => $request->country_id,
        ]);
        return redirect()->route('admin.shippingMethods.index')->with('success', 'Shipping method added successfully.');;
    }


    public function destroy($id)
    {
        $shippingMethod = ShippingMethod::find($id);

        if (!$shippingMethod) {
            return redirect()->route('admin.shippingMethods.index')->with('error', 'Shipping method not found.');
        }

        $shippingMethod->delete();

        return redirect()->route('admin.shippingMethods.index')->with('success', 'Shipping method deleted successfully.');
    }

}
