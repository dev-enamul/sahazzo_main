<?php

namespace App\Http\Controllers;
use Image;
use File;
use App\Models\About;
use App\Http\Requests\AboutValidation;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function about()
    {
        $about = About::first();
        return view('about.index', compact('about'));
    }

    function aboutinsert(AboutValidation $request)
    {
        $info = About::create($request->except('_token'));
        
        if ($request->hasFile('about_photo')) {
            $about_photo = $request->file('about_photo');
            $new_name = $info->id . "." . $about_photo->getClientOriginalExtension();
            $save_location = public_path("uploads/about_photos/" . $new_name);
            
            // Move the uploaded file to the desired location
            move_uploaded_file($about_photo->getPathname(), $save_location);
    
            // Update the about with the new image name
            $info->about_photo = $new_name;
            $info->save();
        }
        
        return back()->with('status', 'About inserted successfully!!');
    }
    

    function aboutedit()
    {
       $about =  About::first();
       return view('about.edit' , compact('about'));
    }

    function aboutupdate(Request $request)
        { 
            $request->validate([
                'description' => 'required',
                'mission_text' => 'required',
                'mission_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'vission_text' => 'required',
                'vission_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'values_text' => 'required',
                'values_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'new_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
         
            $about = About::first(); 
            if ($request->hasFile('new_image')) { 
                if ($about->about_photo) {
                    $oldImagePath = public_path('uploads/about_photos/' . $about->about_photo);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
         
                $newImage = $request->file('new_image');
                $newImageName = time() . '.' . $newImage->getClientOriginalExtension();
                $newImagePath = public_path("uploads/about_photos/" . $newImageName);
                $newImage->move(public_path("uploads/about_photos/"), $newImageName);
                $about->image = $newImageName;
            }
         
            if ($request->hasFile('mission_image')){
                $missionImageName = $this->uploadImage($request->file('mission_image'), 'mission');
                $about->mission_image = $missionImageName;
            }

            if ($request->hasFile('vission_image')){
                $vissionImageName = $this->uploadImage($request->file('vission_image'), 'vission');
                $about->vission_image = $vissionImageName;
            }

            if ($request->hasFile('values_image')){
                $valuesImageName = $this->uploadImage($request->file('values_image'), 'values');
                $about->values_image = $valuesImageName; 
            }

            if ($request->hasFile('company_logo')){
                $logo = $this->uploadImage($request->file('company_logo'), 'logo');
                $about->company_logo = $logo; 
            }

            if ($request->hasFile('fav_icon')){
                $fav_icon = $this->uploadImage($request->file('fav_icon'), 'fav');
                $about->fav_icon = $fav_icon; 
            }  
            $about->description = $request->description;
            $about->mission_text = $request->mission_text; 
            $about->vission_text = $request->vission_text; 
            $about->values_text = $request->values_text; 
            $about->company_name = $request->company_name;   
            $about->save(); 
            return redirect()->route('about')->withEditstatus('About Edited successfully!!');
        }

    private function uploadImage($image, $prefix)
        {
            $imageName = $prefix . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("uploads/about_photos/"), $imageName);
            return $imageName;
        }


    function aboutdelete($about_id)
    {
        $about = About::findorFail($about_id);
        if (File::exists(public_path('uploads/about_photos/'.$about->about_photo))) {

            unlink(public_path('uploads/about_photos/'.$about->about_photo));
        }
        $about->delete();

        // Slider::findOrFail($slider_id)->delete();
        return back()->with('deletestatus', 'About deleted successfully!!');
    }
}
