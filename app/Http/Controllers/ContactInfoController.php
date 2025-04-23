<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactInfo;  // Correctly importing the model

class ContactInfoController extends Controller
{

    public function index()
    {
        $contactInfos = ContactInfo::all(); // Get all contact information
        return view('admin.contactInfo.index', compact('contactInfos'));
    }

    // Show the form to create a new contact info
    public function create()
    {
        return view('admin.contactInfo.create');
    }

    // Store new contact information
    public function store(Request $request)
    {
        $request->validate([
            'postal_address' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'fax' => 'nullable|string|max:15',
            'support_email' => 'required|email',
            'info_email' => 'required|email',
        ]);

        ContactInfo::create($request->all()); // Save the new contact info

        return redirect()->route('admin.contactInfo.index')->with('success', 'Contact Info Created Successfully');
    }

    // Show the contact info for editing
    public function edit($id)
    {
        $contactInfo = ContactInfo::findOrFail($id); // Find the contact info by id
        return view('admin.contactInfo.edit', compact('contactInfo'));
    }

    // Update the contact info
    public function update(Request $request, $id)
    {
        $request->validate([
            'postal_address' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'fax' => 'nullable|string|max:15',
            'support_email' => 'required|email',
            'info_email' => 'required|email',
        ]);

        $contactInfo = ContactInfo::findOrFail($id);
        $contactInfo->update($request->all()); // Update the contact info

        return redirect()->route('admin.contactInfo.index')->with('success', 'Contact Info Updated Successfully');
    }

    // Delete the contact info
    public function destroy($id)
    {
        $contactInfo = ContactInfo::findOrFail($id);
        $contactInfo->delete(); // Delete the contact info

        return redirect()->route('admin.contactInfo.index')->with('success', 'Contact Info Deleted Successfully');
    }

    // Show the first contact info record
    public function showContactInfo()
    {
        $contactInfo = ContactInfo::first(); // Assuming you have only one record
        return view('frontend.contact.index', compact('contactInfo'));
    }

}
