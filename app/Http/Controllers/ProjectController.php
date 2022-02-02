<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\ProjectGroup;
use App\Models\DesignType;
use App\Models\Design;
use App\Models\Project;
use App\Models\ProjectType;
use App\Models\ProjectDesign;

use Crypt;
use App\MyApp;

class ProjectController extends Controller
{
    public function index()
    {
        //$project_img = Http::get('http://sdplweb.com/sdpl/api/get-project-image'); 
        $project_img = Http::get(MyApp::API_URL.'get-project-image'); 
        //$countries = Http::get(MyApp::API_LIVE_URL.'country');
        //$project_group = Http::get(MyApp::API_LIVE_URL.'project-group');
        $user_id = session('USER_ID');
        $project_group = ProjectGroup::all();
        $countries = Country::all();
        $design_type = DesignType::all();

        $design_list = array();
        foreach ($design_type as $key => $value)
        {
            $design_list[] = Design::where(['design_type_id'=>$value->id])->get();
        }

        $projects = Project::join('project_types','project_types.id','=','projects.project_type_id')
                        ->join('users','users.id','=','projects.user_id')
                        ->where('projects.user_id',$user_id)
                        ->get(['projects.*','project_types.project_type','users.name as client_name']);

        $design_type_name = array();
        foreach ($projects as $key => $project) {
            $design_type_name[] = getDesignType($project->design_type);
        }

        return view('user.project', [
            'countries'=>$countries,
            'project_group'=>$project_group,
            'design_type'=>$design_type,
            'design_list'=>$design_list,
            'projects'=>$projects,
            'design_type_name'=>$design_type_name,
            'project_prestigious_img'=>$project_img['project_prestigious_img'],
            'project_recent_project_img'=>$project_img['project_recent_project_img']
        ]);
    }

    public function projectTypes($project_group_id)
    {
        $project_group_id = Crypt::decrypt($project_group_id);
        $project_type = Http::get(MyApp::API_URL.'project-type/'.$project_group_id);
 
        $residential_img = Http::get(MyApp::API_URL.'get-residential-image');
        return view('user.project_type',[
            'project_type'=>$project_type['project_type'],
            'residential_prestigious_img'=>$residential_img['residential_prestigious_img'],
            'residential_recent_project_img'=>$residential_img['residential_recent_project_img']
        ]);
    }

    public function projectTypeDetail(Request $req)
    {
        
        $project_type_id = Crypt::decrypt($req->input('project_type_id'));
        //$project_type_id = $req->input('project_type_id');
        $project_group = ProjectGroup::all();
        $countries = Country::all();
        $design_type = DesignType::all();
        $design_list = array();
        foreach ($design_type as $key => $value)
        {
            $design_list[] = Design::where(['design_type_id'=>$value->id])->get();
        }
        

        $project_type_name = ProjectType::where(['id'=>$project_type_id])->first('project_type');
        $gallery = Http::get(MyApp::API_URL.'get-gallery/'.$project_type_id);
        return view('user.project_type_detail',[
            'countries'=>$countries,
            'project_group'=>$project_group,
            'design_type'=>$design_type,
            'design_list'=>$design_list,
            'project_type_name'=>$project_type_name['project_type'],
            'gallery'=>$gallery['gallery']
        ]);
    }

    public function editProject($project_id)
    {  
        $project = Project::find($project_id);
        $project_type = ProjectType::where(['project_group_id'=>$project->project_group_id])->get();
        $states = State::where(['country_id'=>$project->country])->get();
        $cities = City::where(['state_id'=>$project->state])->get();

        $designs = ProjectDesign::where(['project_id'=>$project->id])->get(['design_id']);

        return response()->json([
            'status'=>200,
            'project'=>$project,
            'project_type'=>$project_type,
            'states'=>$states,
            'cities'=>$cities,
            'designs'=>$designs
        ]);
    }
    
}
