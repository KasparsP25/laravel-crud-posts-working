<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', ['contacts' => $contacts]);
    }


        public function create()
    {
        return view('contacts.create');
    }

    
        public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:11',
            'email' =>'required',
            'content' =>'required|min:2'
        ]);

        Contact::create($validated);

        return redirect()->route('contacts.index');
    }
}
