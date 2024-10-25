<?php

namespace App\Http\Controllers;
use Image;
use File;
use App\Models\Team;
use App\Http\Requests\TeamValidation;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function team()
    {
        $teams = Team::all();
        return view('team.index', compact('teams'));
    }

    public function create(){
        return view('team.create');
    }

    public function teaminsert(TeamValidation $request)
    {
        $info = Team::create($request->except('_token'));
        if ($request->hasFile('tm_photo')) {
            $team_photo = $request->file('tm_photo');
            $new_name = $info->id . "." . $team_photo->getClientOriginalExtension();
            $save_location = public_path("uploads/team_photos/" . $new_name);
 
            move_uploaded_file($team_photo->getPathname(), $save_location);
 
            $info->tm_photo = $new_name;
            $info->save();
        }
        return redirect()->route('team')->with('status', 'Team insert successfully!!');
    }

    function teamedit($team_id)
    {
       $team_info =  Team::findorFail($team_id);
       return view('team.edit' , compact('team_info'));
    }

    public function teamupdate(Request $request, $id)
    {
        $input = $request->all();
        if ($request->hasFile('new_image')) {
            unlink(public_path('uploads/team_photos/' . Team::findOrFail($id)->tm_photo));
            $team_photo = $request->file('new_image');
            $new_name = $id . "." . $team_photo->getClientOriginalExtension();
            $save_location = public_path("uploads/team_photos/" . $new_name);

            // Move the uploaded file to the desired location
            move_uploaded_file($team_photo->getPathname(), $save_location);

            $imge = $new_name;
        } else {
            $imge = Team::findOrFail($id)->tm_photo;
        }
        $input['tm_photo']=$imge;
        Team::findOrFail($request->id)->update($input);
        return redirect()->route('team')->withEditstatus('Team Edited successfully!!');
    }

    public function teamdelete($team_id)
    {
        $team = Team::findOrFail($team_id);
        if (File::exists(public_path('uploads/team_photos/' . $team->tm_photo))) {
            unlink(public_path('uploads/team_photos/' . $team->tm_photo));
        }
        $team->delete();
        return back()->with('deletestatus', 'Team deleted successfully!!');
    }
}
