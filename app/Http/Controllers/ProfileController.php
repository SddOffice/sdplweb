<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Country;
use App\MyApp;

class ProfileController extends Controller
{
    public function index(Request $req)
    {
        //$countries = Http::get(MyApp::API_URL.'country');
        //$user_detail = User::where(['id'=>$user_id])->get();
        $user_id = session('USER_ID');

        $countries = Country::all();

        // fetch data two tables data from database
        $user_detail = User::leftjoin('countries','users.country','=','countries.id') 
                        ->leftjoin('states','users.state','=','states.id')
                        ->leftjoin('cities','users.city','=','cities.id')
                        ->where('users.id',$user_id)
                        ->first(['users.*','countries.country_name','states.state_name','cities.city_name']);
        
        // $users = DB::table('users')
        // ->join('contacts', 'users.id', '=', 'contacts.user_id')
        // ->join('orders', 'users.id', '=', 'orders.user_id')
        // ->select('users.*', 'contacts.phone', 'orders.price')
        // ->get();
        
        // echo "<pre>";
        // print_r($user_detail);

        return view('user.profile', [
            'user_detail'=>$user_detail,
            'countries'=>$countries
        ]);
    }

    public function editUserDetail($user_id)
    {
        $user_detail = User::find($user_id);
        return response()->json([
            'status'=>200,
            'user_detail'=>$user_detail
        ]);
    }

    
}
