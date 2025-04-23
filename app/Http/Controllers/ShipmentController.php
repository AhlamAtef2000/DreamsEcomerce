<?php

namespace App\Http\Controllers;

use App\Models\shipment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Country;
use App\Models\ShippingMethod;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shipments = Shipment::all();
        return view('frontend.shipments.index', compact('shipments'));
    }



    // Store a new shipment
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'shipment_status' => 'required|string',
            'shipping_address' => 'required|string',
            'shipping_cost' => 'required|numeric',
        ]);

        Shipment::create($request->all());

        return redirect()->route('user.shipments.index')->with('success', 'Shipment created successfully!');
    }

    // Show the details of a specific shipment
    public function show(Shipment $shipment)
    {
        return view('frontend.shipments.show', compact('shipment'));
    }


    public function getCountries()
{

    return response()->json(Country::all());
}

public function getShippingMethodsByCountry($countryId)
{
    $shippingMethods = ShippingMethod::where('country_id', $countryId)->get();
    return response()->json($shippingMethods);
}

    // Update the shipment


    // Delete the shipment
    public function destroy(Shipment $shipment)
    {
        try {
            // Attempt to delete the shipment
            $shipment->delete();

            // Redirect back to the index page with a success message
            return redirect()->route('user.shipments.index')->with('success', 'Shipment deleted successfully!');
        } catch (\Exception $e) {
            // Redirect back to the index page with an error message
            return redirect()->route('user.shipments.index')->with('error', 'Failed to delete the shipment. Please try again.');
        }
    }

}
