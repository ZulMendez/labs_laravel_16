<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Carousel;
use App\Models\Discover;
use App\Models\Logo;
use App\Models\Ready;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home() {
        $logo = Logo::find(1);
        $video = Video::all();
        $carousel = Carousel::all();
        $services3 = Service::inRandomOrder()->limit(3)->get();
        $services9 = Service::inRandomOrder()->limit(9)->get();
        $discovers = Discover::all();
        $testimonials = Testimonial::all();
        $team = Team::all();
        $readies = Ready::all();
        return view('home', compact('logo', 'video', 'carousel', 'services3', 'services9', 'discovers', 'testimonials', 'team', 'readies'));
    }
    
    public function services(){
        $services = Service::paginate(9)->fragment('servicePaginate');
        $logo = Logo::find(1);
        $features = Service::inRandomOrder()->limit(3)->get();
        $articles = Article::all();
        return view('services', compact('services', 'logo', 'features', 'articles'));
    }

    public function blog(){
        
        return view('blog');
    }

    public function blogp(){
        
        return view('blog-post');
    }
    public function contact(){
        return view('contact');
    }
}
