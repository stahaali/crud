<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function home()
    {
        $contacts = Contact::all();
        return view('layout.home')->with('contacts', $contacts);
    }
    public function create()
    {
        return view('layout.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Contact::create($input);
        return redirect('layout.home')->with('flash_message', 'Contact Addedd!');  
    }    
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('layout.show')->with('contacts', $contact);
    }
}
