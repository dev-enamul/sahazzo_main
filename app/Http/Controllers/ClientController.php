<?php

namespace App\Http\Controllers;
use Image;
use File;
use App\Models\Client;
use App\Http\Requests\ClientValidation;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function client()
    {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    public function clientinsert(ClientValidation $request)
    {
        $info = Client::create($request->except('_token'));
        if ($request->hasFile('clients_photo')) {
            $client_photo = $request->file('clients_photo');
            $new_name = $info->id . "." . $client_photo->getClientOriginalExtension();
            $save_location = public_path("uploads/client_photos/" . $new_name);

            // Move the uploaded file to the desired location
            move_uploaded_file($client_photo->getPathname(), $save_location);

            // Update the client with the new image name
            $info->clients_photo = $new_name;
            $info->save();
        }
        return back()->with('status', 'Client insert successfully!!');
    }

    function clientedit($client_id)
    {
       $client_info =  Client::findorFail($client_id);
       return view('client.edit' , compact('client_info'));
    }

    public function clientupdate(Request $request, $id)
    {
        if ($request->hasFile('new_image')) {
            unlink(public_path('uploads/client_photos/' . Client::findOrFail($id)->clients_photo));
            $client_photo = $request->file('new_image');
            $new_name = $id . "." . $client_photo->getClientOriginalExtension();
            $save_location = public_path("uploads/client_photos/" . $new_name);

            // Move the uploaded file to the desired location
            move_uploaded_file($client_photo->getPathname(), $save_location);

            // Update the client with the new image name
            Client::findOrFail($id)->update([
                'clients_photo' => $new_name,
            ]);
        }
        Client::findOrFail($request->id)->update([
            'short_text' => $request->short_text,
        ]);
        return redirect('client')->withEditstatus('Client Edited successfully!!');
    }

    public function clientdelete($client_id)
    {
        $client = Client::findOrFail($client_id);
        if (File::exists(public_path('uploads/client_photos/' . $client->clients_photo))) {
            unlink(public_path('uploads/client_photos/' . $client->clients_photo));
        }
        $client->delete();
        return back()->with('deletestatus', 'Client deleted successfully!!');
    }

}
