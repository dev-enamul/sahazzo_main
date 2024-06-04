<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function index(){
        $messages = ContactMessage::latest()->paginate(20); 
        return view('message.index',compact('messages'));
    }

    public function status($id){
        $message = ContactMessage::find($id); 
        $message->status = !$message->status;
        $message->save();
        return redirect()->back()->with('mssage',"Status Updated");
    }

    public function delete($id){
        $message = ContactMessage::find($id); 
        $message->delete();
        return redirect()->back()->with('deletestatus',"Contact Message Deleted");
    }
}
