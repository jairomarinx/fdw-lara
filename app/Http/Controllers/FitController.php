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

    public function nutrition_reset_consultation(Request $request)
    {
        return view('index1.services.nutrition-reset-consultation');
    }

    public function grocery_reset_tour()
    {
        return view('index1.services.grocery-reset-tour');

    }

    public function weekly_meal_prepping()
    {
        return view('index1.services.weekly-meal-prepping');
    }

    public function life_reset_consultation()
    {
        return view('index1.services.life-reset-consultation');

    }

}
