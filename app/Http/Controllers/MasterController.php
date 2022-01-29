<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProjectType;
use App\Models\State;
use App\Models\City;

class MasterController extends Controller
{
    public function getState($country_id)
    {
        $states = State::where(['country_id'=>$country_id])->get();
        $html = "";

        $html .= "<option selected disabled>Choose...</option>";
        foreach ($states as $key => $state) {
            
            $html .= "<option value='".$state->id."'>".$state->state_name."</option>";
        }
        return response()->json([
            'states'=>$states,
            'html'=>$html
        ]);
    }

    public function getCity($state_id)
    {
        $cities = City::where(['state_id'=>$state_id])->get();
        $html = "";

        $html .= "<option selected disabled>Choose...</option>";
        foreach ($cities as $key => $city) {
            
            $html .= "<option value='".$city->id."'>".$city->city_name."</option>";
        }
        return response()->json([
            'cities'=>$cities,
            'html'=>$html
        ]);
    }

    public function getProjectType($project_group_id)
    {
        $project_type = ProjectType::where(['project_group_id' => $project_group_id])->get();
        $html = "";
        $html .= "<option selected disabled >Choose...</option>";
        foreach ($project_type as $key => $list) {
            $html .= "<option value='".$list->id."'>" . ucwords($list->project_type) . "</option>";
        }
        return response()->json([
            'status'=>200,
            'html'=>$html
        ]);
    }

}
