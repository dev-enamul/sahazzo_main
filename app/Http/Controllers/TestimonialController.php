<?php

namespace App\Http\Controllers;
use Image;
use File;
use App\Models\Testimonial;
use App\Http\Requests\TestimonialValidation;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function testimonial()
    {
        $testimonials = Testimonial::all();
        return view('testimonial.index', compact('testimonials'));
    }

    public function testimonialinsert(TestimonialValidation $request)
    {
        $info = Testimonial::create($request->except('_token'));
        if ($request->hasFile('testimonial_photo')) {
            $testimonial_photo = $request->file('testimonial_photo');
            $new_name = $info->id . "." . $testimonial_photo->getClientOriginalExtension();
            $save_location = public_path("uploads/testimonial_photos/" . $new_name);

            // Move the uploaded file to the desired location
            move_uploaded_file($testimonial_photo->getPathname(), $save_location);

            // Update the testimonial with the new image name
            $info->testimonial_photo = $new_name;
            $info->save();
        }
        return back()->with('status', 'Testimonial insert successfully!!');
    }

    function testimonialedit($testimonial_id)
    {
       $testimonial_info =  Testimonial::findorFail($testimonial_id);
       return view('testimonial.edit' , compact('testimonial_info'));
    }

    public function testimonialupdate(Request $request, $id)
    {
        if ($request->hasFile('new_image')) {
            unlink(public_path('uploads/testimonial_photos/' . Testimonial::findOrFail($id)->testimonial_photo));
            $testimonial_photo = $request->file('new_image');
            $new_name = $id . "." . $testimonial_photo->getClientOriginalExtension();
            $save_location = public_path("uploads/testimonial_photos/" . $new_name);

            // Move the uploaded file to the desired location
            move_uploaded_file($testimonial_photo->getPathname(), $save_location);

            // Update the testimonial with the new image name
            Testimonial::findOrFail($id)->update([
                'testimonial_photo' => $new_name,
            ]);
        }
        Testimonial::findOrFail($request->id)->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'comment' => $request->comment,
        ]);
        return redirect('testimonial')->withEditstatus('Testimonial Edited successfully!!');
    }

    public function testimonialdelete($testimonial_id)
    {
        $testimonial = Testimonial::findOrFail($testimonial_id);
        if (File::exists(public_path('uploads/testimonial_photos/' . $testimonial->testimonial_photo))) {
            unlink(public_path('uploads/testimonial_photos/' . $testimonial->testimonial_photo));
        }
        $testimonial->delete();
        return back()->with('deletestatus', 'Testimonial deleted successfully!!');
    }
}
