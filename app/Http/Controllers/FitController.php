<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Presale;

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

    public function sunrise_life_reset()
    {
        return view('index1.services.sunrise-life-reset');
    }

    public function life_reset_retreats()
    {
        return view('index1.services.life-reset-retreats');
    }

    public function saturday_booty_camp()
    {
        return view('index1.services.saturday-booty-camp');
    }

    public function kayak_with_us()
    {
        return view('index1.services.kayak-with-us');

    }

    public function fit_without_gym()
    {
        return view('programs.fit-without-gym');
    }

    public function mindfulness_morning_habits()
    {
        return view('programs.mindfulness-morning-habits');

    }

    public function fit_reset_programs()
    {
        return view('programs.fit-reset-programs');
    }

    public function mind_reset_programs()
    {
        return view('programs.mind-reset-programs');
    }

    public function life_reset_programs()
    {
        return view('programs.life-reset-programs');
    }

    public function events()
    {
        return view('events.index');        
    }

    public function website_launch_party()
    {
        return view('events.website-launch-party');
    }

    public function save_contact(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->interests = $request->strong_bodies.' '.$request->open_minds.' '.$request->kind_hearts;
        $contact->city = $request->city;
        $contact->state = $request->state;
        $contact->country = $request->country;
        $contact->save();

        return response()->redirectToRoute('root');
        
        
    }

    public function contacts(Request $request)
    {
        $contacts = Contact::get();
        $presales = Presale::get();

        return view('contacts')
                ->with('contacts',$contacts)
                ->with('presales',$presales);
    }

    public function contact_us(Request $request)
    {
        return view('contact-us');
    }

    public function donate()
    {
        return view('donation');
    }

    public function intentional_make_over(Request $request)
    {
        return view('index1.services.intentional-make-over');
    }

    public function fit_forever()
    {
        return view('index1.services.fit-forever');    
    }



}
