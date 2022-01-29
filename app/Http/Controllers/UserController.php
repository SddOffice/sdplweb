<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Validator;
use Auth;
use App\Models\Registration;
use App\Models\User;
use App\send;
use App\MyApp;

class UserController extends Controller
{
    public function index(Request $req)
    {
        if($req->session()->has('USER_LOGIN'))
        {
            return redirect('user/dashboard');
        }else {
            return view('/login');
        }
        return view('/login');
    }

    public function loginAuth(Request $req)
    {
        $email = $req->post('email');
        $password = $req->post('password');
        $result = User::where(['email'=>$email])->first();
        if($result)
        {
            if(Hash::check($req->post('password'),$result->password))
            {
                $req->session()->put('USER_LOGIN', true);
                $req->session()->put('USER_ID', $result->id);
                $req->session()->put('USER_NAME', $result->name);
                return redirect('user/dashboard');
            }else{
                $req->session()->flash('error','Please enter valid password');
                return redirect('/login');
            }
        }else{
            $req->session()->flash('error','Please enter valid login details');
            return redirect('/login');
        }
        
    }

    public function Registration(Request $req)
    {
        return view('/registration');
    }

    public function userRegistration(Request $req)
    {
        $response = Http::post(MyApp::API_URL.'registration', [
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'mobile_no' => $req->input('mobile_no'),
            'password' => $req->input('password'),
        ]);

        if($response['status'] == 400){
            $req->session()->put('msg', $response['msg']);
            return redirect('/registration');
        }else{
            return redirect('/login');
        }
    }
    

    public function senddata(Request $req)
    {
        return view('send');
       
    }
    public function varifyOtp(Request $req)
    {
        return view('user.dashboard');
       
    }


    public function logout(Request $req)
    { 
        session()->forget('USER_LOGIN');
        session()->forget('USER_ID');
        session()->forget('USER_NAME');
        session()->flash('msg','Logout successfully'); 
        return redirect('/login');
    }
   
}
