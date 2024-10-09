<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceValidation;
use Image;
use File;
use App\Models\Service;
use App\Models\ServiceCategory;
use Auth;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function service()
    {
        $services = Service::all();
        return view('service.index', compact('services'));
    }

    public function create(){
        $categories = ServiceCategory::all();
        return view('service.create',compact('categories'));
    }

    function serviceinsert(ServiceValidation $request)
    {
        $model = new Service;
        $slug = getSlug($model, $request->title);
        $input = $request->all();
        $input['slug'] = $slug;
        $info = Service::create($input); 
        if ($request->hasFile('services_photo')) {
            $services_photo = $request->file('services_photo');
            $new_name = $info->id . "." . $services_photo->getClientOriginalExtension();
            $save_location = public_path("uploads/service_photos/" . $new_name); 
            move_uploaded_file($services_photo->getPathname(), $save_location); 
            $info->services_photo = $new_name;
            $info->save();
        } 
        return redirect()->route('service')->with('status', 'Service insert successfully!!');
    }

    function serviceedit($service_id)
    {
        $categories = Service::all();
        $service_info =  Service::findorFail($service_id);
        return view('service.edit' , compact('service_info','categories'));
    }

    function serviceupdate(Request $request, $id)
        {
            if ($request->hasFile('new_image')) {
                unlink(public_path('uploads/service_photos/' . Service::findOrFail($id)->services_photo));
                $service_photo = $request->file('new_image');
                $new_name = $id . "." . $service_photo->getClientOriginalExtension();
                $save_location = public_path("uploads/service_photos/" . $new_name);
 
                move_uploaded_file($service_photo->getPathname(), $save_location);

                Service::findOrFail($id)->update([
                    'services_photo' => $new_name,
                ]);
            }
            $model  = new Service;
            Service::findOrFail($request->id)->update([
                'title' => $request->title,
                'short_description' => $request->short_description,
                'description'   =>  $request->description,
                'slug'          => getSlug($model,$request->title)
            ]);
            
            return redirect()->route('service')->withEditstatus('Service Edited successfully!!');
        }

        function servicedelete($service_id)
        {
            $service = Service::findOrFail($service_id);
            if (File::exists(public_path('uploads/service_photos/' . $service->services_photo))) {
                unlink(public_path('uploads/service_photos/' . $service->services_photo));
            }
            $service->delete();
            
            return back()->with('deletestatus', 'Service deleted successfully!!');
        }
}
