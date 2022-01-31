<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Crypt;
use App\Models\ProjectType;

use App\MyApp;

class ResidentialController extends Controller
{
    public function index($project_group_id)
    {
        $project_group_id = Crypt::decrypt($project_group_id);
        $project_type = ProjectType::where(['project_group_id'=>$project_group_id])->get();

        $residential_img = Http::get(MyApp::API_URL.'get-residential-image');
        return view('user.residential',[
            'project_type'=>$project_type,
            'residential_prestigious_img'=>$residential_img['residential_prestigious_img'],
            'residential_recent_project_img'=>$residential_img['residential_recent_project_img']
        ]);
    }

    public function bungalow()
    {
        $residential_img = Http::get(MyApp::API_URL.'get-residential-image');
        return view('user.bungalow',[
            'residential_prestigious_img'=>$residential_img['residential_prestigious_img'],
            'residential_recent_project_img'=>$residential_img['residential_recent_project_img']
        ]);
    }
}
