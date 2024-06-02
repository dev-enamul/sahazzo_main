<?php

namespace App\Http\Controllers;
use Image;
use File;
use App\Models\Portfolio;
use App\Models\Service;
use App\Http\Requests\PortfolioValidation;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function portfolio(Request $request)
    {
        if(isset($request->service_id) && $request->service_id!=null){
            $portfolios = Portfolio::where('service_id',$request->service_id)->get();
        }else{
            $portfolios = Portfolio::all();
        }

        $selected = $request->service_id;
        
        $services = Service::all();
        return view('portfolio.index', compact('portfolios','services','selected'));
    }

    public function create(){
        $services = Service::all();
        return view('portfolio.create', compact('services'));
    }

    public function portfolioinsert(PortfolioValidation $request)
    {
        $model = new Portfolio;
        $slug = getSlug($model, $request->title);
        $input = $request->all();
        $input['slug'] = $slug;
        $info = Portfolio::create($input);  
        if ($request->hasFile('portfolio_photo')) {
            $portfolio_photo = $request->file('portfolio_photo');
            $new_name = $info->id . "." . $portfolio_photo->getClientOriginalExtension();
            $save_location = public_path("uploads/portfolio_photos/" . $new_name);

            // Move the uploaded file to the desired location
            move_uploaded_file($portfolio_photo->getPathname(), $save_location);

            // Update the portfolio with the new image name
            $info->portfolio_photo = $new_name;
            $info->save();
        }
        return redirect()->route('portfolio')->with('status', 'Portfolio insert successfully!!');
    }


    function portfolioedit($portfolio_id)
    {
       $portfolio_info =  Portfolio::findorFail($portfolio_id);
       $services = Service::all();
       return view('portfolio.edit' , compact('portfolio_info','services'));
    }

    public function portfolioupdate(Request $request, $id)
    {
        if ($request->hasFile('new_image')) {
            unlink(public_path('uploads/portfolio_photos/' . Portfolio::findOrFail($id)->portfolio_photo));
            $portfolio_photo = $request->file('new_image');
            $new_name = $id . "." . $portfolio_photo->getClientOriginalExtension();
            $save_location = public_path("uploads/portfolio_photos/" . $new_name);

            // Move the uploaded file to the desired location
            move_uploaded_file($portfolio_photo->getPathname(), $save_location);

            // Update the portfolio with the new image name
            Portfolio::findOrFail($id)->update([
                'portfolio_photo' => $new_name,
            ]);
        }
        $model  = new Portfolio;
        Portfolio::findOrFail($request->id)->update([
            'service_id' => $request->service_id,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'slug'  => getSlug($model,$request->title)
        ]);
        return redirect()->route('portfolio')->withEditstatus('Portfolio Edited successfully!!');
    }

    public function portfoliodelete($portfolio_id)
    {
        $portfolio = Portfolio::findOrFail($portfolio_id);
        if (File::exists(public_path('uploads/portfolio_photos/' . $portfolio->portfolio_photo))) {
            unlink(public_path('uploads/portfolio_photos/' . $portfolio->portfolio_photo));
        }
        $portfolio->delete();
        return back()->with('deletestatus', 'Portfolio deleted successfully!!');
    }
}
