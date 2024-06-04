<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderValidation; 
use App\Models\Slider;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function slider()
    {
        $sliders = Slider::all();
        return view('slider.index', compact('sliders'));
    }

    function sliderinsert(SliderValidation $request)
    {
        $info = Slider::create($request->except('_token'));
        
        if ($request->hasFile('slider_photo')) {
            $slider_photo = $request->file('slider_photo');
            $new_name = $info->id . "." . $slider_photo->getClientOriginalExtension();
            $save_location = public_path("uploads/slider_photos/" . $new_name);
            
            // Move the uploaded file to the desired location
            $slider_photo->move(public_path('uploads/slider_photos'), $new_name);
            
            $info->slider_photo = $new_name;
            $info->save();
        }
        
        return back()->with('status', 'Slider inserted successfully!');
    }

    function slideredit($slider_id)
    {
        $slider_info = Slider::findOrFail($slider_id);
        return view('slider.edit' , compact('slider_info'));
    }

    function sliderupdate(Request $request, $id)
    {  
    $slider = Slider::findOrFail($id);
    if ($request->hasFile('new_image')) { 
        $old_image_path = public_path('uploads/slider_photos/' . $slider->slider_photo);
         
        if (file_exists($old_image_path)) {
            unlink($old_image_path);
        }

        $slider_photo = $request->file('new_image');
        $new_name = $id . "." . $slider_photo->getClientOriginalExtension();
        $save_location = public_path("uploads/slider_photos/" . $new_name);
         
        move_uploaded_file($slider_photo->getPathname(), $save_location); 
        $slider->slider_photo = $new_name; 
    }
    $slider->slider_title = $request->slider_title;
    $slider->save();


    return redirect()->route('slider')->withEditstatus('Slider edited successfully!');
}


    function sliderdelete($slider_id)
    {
        $slider = Slider::findorFail($slider_id);
        if (File::exists(public_path('uploads/slider_photos/'.$slider->slider_photo))) {

            unlink(public_path('uploads/slider_photos/'.$slider->slider_photo));
        }
        $slider->delete();

        // Slider::findOrFail($slider_id)->delete();
        return back()->with('deletestatus', 'Slider deleted successfully!!');
    }
}
