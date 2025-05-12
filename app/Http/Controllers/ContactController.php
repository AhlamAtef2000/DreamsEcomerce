<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactInfo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        $contactInfo = ContactInfo::first(); // Get all contact information
        
        return view('frontend.contact.index', compact('contactInfo'));
    }

    public function create()
    {
        return view('frontend.contact.index');
    }

    public function store(Request $request)
    {
    
        $request->validate([
            'name' => 'required|string|regex:/^[a-zA-Z]/|max:255',  
            'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@([a-zA-Z0-9.-]+\.)+com$/',  
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);


        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

      
        return redirect()->back()->with('success', 'Your message has been sent!');
    }

  

  



}
