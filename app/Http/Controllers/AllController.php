<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home() {
        // $about = About::all();
        // $testimonials = Skill::all();
        // $services = Projet::all();
        // $articles = Contact::all();
        // $team = Fact::all();
        // $contact = Service::paginate(3)->fragment('services');
        return view('home');
    }
}
// compact('about', 'testimonials', 'services', 'articles', 'team', 'contact')
