<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
      return view('home');
    }

    public function service(){
        $services = [
            [
                'SL' => 1,
                'Name' => 'Android',
                'Price' => '$500'
            ],
            [
                'SL' => 2,
                'Name' => 'PC',
                'Price' => '$1000'
            ],
            [
                'SL' => 3,
                'Name' => 'Mac',
                'Price' => '$1500'
            ]
        ];
        return view('service', compact('services'));
    }

    public function our_teams(){
        return view('our-teams');
    }

    public function contact_us(){
        return view('contact-us');
    }

    public function about_us(){
        return view('about-us');
    }
}
