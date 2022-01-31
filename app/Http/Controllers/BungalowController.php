<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\MyApp;

class BungalowController extends Controller
{
    public function index(){

        // $project_img = Http::get(MyApp::API_URL.'get-project-image');
        // return view('user.bungalow',[
        //     'project_prestigious_img'=>$project_img['project_prestigious_img'],
        //     'project_recent_project_img'=>$project_img['project_recent_project_img']
        // ]);
    }
}
