<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Service;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function blog(Request $request)
    { 
        if(isset($request->service_id) && $request->service_id != null){
            $blogs = Blog::where('service_id',$request->service_id)->get();
        }else{
            $blogs = Blog::get();
        } 

        $selected = $request->service_id;
        $services = Service::all();
        return view('blog.index', compact('blogs','services','selected'));
    } 

    function create()
    {  
        $services = Service::all();
        return view('blog.create', compact('services'));
    } 

    public function store(Request $request)
    {
        $info = Gallery::create($request->except('_token'));
        if ($request->hasFile('gallery_photo')) {
            $client_photo = $request->file('gallery_photo');
            $new_name = $info->id . "." . $client_photo->getClientOriginalExtension();
            $save_location = public_path("uploads/gallery_photos/" . $new_name);

            // Move the uploaded file to the desired location
            move_uploaded_file($client_photo->getPathname(), $save_location);

            // Update the client with the new image name
            $info->gallery_photo = $new_name;
            $info->save();
        }
        return back()->with('status', 'Client insert successfully!!');
    }

    function edit($id)
    {
       $gallery =  Gallery::findorFail($id);
       $projects = Portfolio::all();
       return view('gallery.edit' , compact('gallery','projects'));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('gallery_photo')) {
            unlink(public_path('uploads/gallery_photos/' . Gallery::findOrFail($id)->gallery_photo));
            $gallery_photo = $request->file('gallery_photo');
            $new_name = $id . "." . $gallery_photo->getClientOriginalExtension();
            $save_location = public_path("uploads/gallery_photos/" . $new_name);

            // Move the uploaded file to the desired location
            move_uploaded_file($gallery_photo->getPathname(), $save_location);

            // Update the client with the new image name
            Gallery::findOrFail($id)->update([
                'clients_photo' => $new_name,
            ]);
        }
        Gallery::findOrFail($request->id)->update([
            'project_id' => $request->project_id,
            'title' => $request->title,
        ]);
        return redirect()->route('gallery')->withEditstatus('Client Edited successfully!!');
    }

    public function delete($client_id)
    {
        $gallery = Gallery::findOrFail($client_id);
        if (File::exists(public_path('uploads/gallery_photos/' . $gallery->gallery_photo))) {
            unlink(public_path('uploads/gallery_photos/' . $gallery->gallery_photo));
        }
        $gallery->delete();
        return back()->with('deletestatus', 'Client deleted successfully!!');
    }
}