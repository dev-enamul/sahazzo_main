<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApply;
class CvController extends Controller
{
    public function index(){
        $cvs = JobApply::latest()->paginate(20);
        return view('cv.index',compact('cvs'));
    }

    public function show($id){
        $cv = JobApply::find($id);
        return view('cv.show',compact('cv'));
    }

    public function delete($id){
        try{
            $cv = JobApply::find($id);
            $cv->delete();
            return redirect()->route('cv')->with('deletestatus','Cv Deleted');
        }catch(Excepton $e){
            return redirect()->route('cv')->with('error','Something Wrong');
        }
    }
}
