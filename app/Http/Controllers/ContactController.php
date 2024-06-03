<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function contact()
    {
        $contact = Contact::first();
        return view('contact.index', compact('contact'));
    }

    function contactinsert(Request $request)
    {
        $info = Contact::create($request->except('_token'));
        return back()->with('status', 'Contact insert successfully!!');
    }

    function contactedit($contact_id)
    {
       $contact_info =  Contact::findorFail($contact_id);
       return view('contact.edit' , compact('contact_info'));
    }

    function contactupdate(Request $request, $id)
    {
        Contact::findOrFail($request->id)->update($request->all());
        return redirect()->route('contact')->withEditstatus('Contact Edited successfully!!');
    } 
}
