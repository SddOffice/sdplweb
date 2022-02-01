<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BungalowController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/team', function (){
    return view('team');
});

Route::get('/project', function (){
    return view('project');
});

Route::get('/project-detail', function (){
    return view('project_detail');
});

Route::get('/project-detail1', function (){
    return view('project_detail1');
});
Route::get('/project-detail2', function (){
    return view('project_detail2');
});
Route::get('/royalorbit', function (){
    return view('royalorbit');
});
Route::get('/terms-of-condition', function (){
    return view('terms-of-condition');
});
Route::get('/privacy-policy', function (){
    return view('privacy-policy');
});



//user login 
Route::get('/registration', [UserController::class, 'registration']);
Route::post('/user-registration', [UserController::class, 'userRegistration']);
Route::get('/login', [UserController::class, 'index']);
Route::post('/login-auth', [UserController::class, 'loginAuth']);

Route::group(['middleware'=>'user_auth'], function(){
    Route::get('user/dashboard', [DashboardController::class, 'index']);

    Route::get('user/get-state/{country_id}', [MasterController::class, 'getState']);
    Route::get('user/get-city/{state_id}', [MasterController::class, 'getCity']);
    
    //Profile route here
    Route::get('user/profile', [ProfileController::class, 'index']);
    Route::get('/user/edit-user-detail/{user_id}', [ProfileController::class, 'editUserDetail']);
    
    Route::get('user/project-types/{project_group_id}', [ProjectController::class, 'projectTypes']);
    Route::get('user/project-type-detail/{project_type_id}', [ProjectController::class, 'projectTypeDetail']);
    //project route here
    Route::get('user/project', [ProjectController::class, 'index']);
    Route::get('user/get-project-type/{project_group_id}', [MasterController::class, 'getProjectType']);
    Route::get('user/edit-project/{project_id}', [ProjectController::class, 'editProject']);


    Route::get('user/logout', [UserController::class, 'logout']);

});


// Route::post('/send', [UserController::class, 'senddata']);
// Route::post('/varify-otp', [UserController::class, 'varifyOtp']);
// Route::get('/user-form', [ProjectController::class, 'UserForm']);


//profile





