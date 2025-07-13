<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FitController extends Controller
{
    public function index(Request $request)
    {
        return view('index1.services');
    }
    public function fitness_reset_consultation(Request $request)
    {
        return view('index1.services.fitness-reset-consultation');
    }

    public function frc(Request $request)
    {
        return view('index1.services.frc');
    }

    public function personal_fitness_training(Request $request)
    {
        return view('index1.services.personal-fitness-training');

    }

    public function group_fitness_training(Request $request)
    {
        return view('index1.services.group-fitness-training');
    }

}
