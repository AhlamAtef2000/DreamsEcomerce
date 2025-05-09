<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('frontend.contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|regex:/^[a-zA-Z]+(\s[a-zA-Z]+)+$/|max:255',  
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

      
        return redirect()->route('home')->with('success', 'Your message has been sent!');
    }

  

    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }



}
