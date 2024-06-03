<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Service;
use File;

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
        $model = new Blog;
        $slug = getSlug($model, $request->title);
        $input = $request->all();
        $input['slug'] = $slug;  
        if ($request->hasFile('blog_photo')) {
            $blog_photo = $request->file('blog_photo');
            $new_name = $slug . "." . $blog_photo->getClientOriginalExtension();
            $save_location = public_path("uploads/blog_photos/" . $new_name); 
            move_uploaded_file($blog_photo->getPathname(), $save_location); 
            $input['blog_photo'] = $new_name; 
        }
        $info = $model->create($input);  
        return redirect()->route('blog')->with('status', 'Blog insert successfully!!');
    }

    function edit($id)
    {
       $blog =  Blog::findorFail($id);
       $services = Service::all();
       return view('blog.edit' , compact('services','blog'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $model = new Blog;
        $slug = getSlug($model, $request->title);
        $input['slug'] = $slug;
        $blog = $model->findOrFail($id);
        if ($request->hasFile('blog_photo')) {
            $filePath = public_path('uploads/blog_photos/' . $blog->blog_photo); 
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $blog_photo = $request->file('blog_photo');
            $new_name = $slug . "." . $blog_photo->getClientOriginalExtension();
            $save_location = public_path("uploads/blog_photos/" . $new_name); 
            move_uploaded_file($blog_photo->getPathname(), $save_location);
  
            $input['blog_photo'] = $new_name;
        }
        $blog->update($input);
        return redirect()->route('blog')->withEditstatus('Blog Update successfully!!');
    }

    public function delete($client_id)
    {
        $blog = Blog::findOrFail($client_id);
        $filePath = public_path('uploads/blog_photos/' . $blog->blog_photo); 
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        $gallery->delete();
        return back()->with('deletestatus', 'Client deleted successfully!!');
    }
}
