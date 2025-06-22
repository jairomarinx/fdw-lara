<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FitController extends Controller
{
    public function index(Request $request)
    {
        return view('index1.services');
    }
}
