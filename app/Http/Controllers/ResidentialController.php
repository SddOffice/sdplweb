<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidentialController extends Controller
{
    public function index()
    {
        return view('user.residential', [
        ]);
    }
}
