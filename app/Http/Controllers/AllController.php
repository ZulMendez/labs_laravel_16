<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home() {
        // $about = About::all();
        return view('home');
    }
    public function services(){
        // $contact = Service::paginate(9)->fragment('services');
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
