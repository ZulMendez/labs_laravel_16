<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home() {
        $logo = Logo::find(1);
        $services3 = Service::inRandomOrder()->limit(3)->get();
        $services9 = Service::inRandomOrder()->limit(9)->get();
        $discovers = Discover::all();
        $testimonials = Testimonial::all();
        $team = Team::all();
        return view('home', compact('logo', 'services3', 'services9', 'discovers', 'testimonials', 'team'));
    }
    public function services(){
        return view('services');
    }
    public function blog(){
        // $articles = Service::paginate(3)->fragment('services');
        return view('blog');
    }
    public function blogp(){
        // $articles = Service::paginate(3)->fragment('services');
        return view('blog-post');
    }
    public function contact(){
        return view('contact');
    }
}
