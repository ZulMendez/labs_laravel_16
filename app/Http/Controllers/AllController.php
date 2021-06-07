<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Blog;
use App\Models\Carousel;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\Discover;
use App\Models\Logo;
use App\Models\Photo;
use App\Models\Ready;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Titre;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home() {
        // TITRES
        $titres = Titre::find(1);

        $titreDiscover = Titre::all();
        $titreService = Titre::all();
        $titreTeam = Titre::all();

        // ABOUT
        $logo = Logo::all();
        $video = Video::all();
        $carousel = Carousel::all();

        // SERVICES
        $services = Service::all();
        $services3 = Service::inRandomOrder()->limit(3)->get();
        $services9 = Service::inRandomOrder()->limit(9)->get();

        // DISCOVER
        $discovers = Discover::all();

        //TESTIMONIALS
        $testimonials = Testimonial::all();

        // TEAM
        $team = Team::all();

        $team = Team::where('poste_id', '>', 1)->get();
        $teamC = $team->random(3);

        $ceo = Team::where('poste_id', 1)->get();
        $centre = $ceo->random(1);

        //PHOTOS
        $photos = Photo::all();
        
        //READY
        $readies = Ready::all();

        // CONTACT
        $contacts = Contact::all();

        return view('home', compact('titres', 'titreDiscover', 'titreService', 'titreTeam', 'logo', 'video', 'services', 'carousel', 'services3', 'services9', 'discovers', 'testimonials', 'centre', 'team', 'teamC', 'photos', 'readies', 'contacts'));
    }

    public function services(){
        $titres = Titre::find(1);
        $services = Service::paginate(9)->fragment('servicePaginate');
        $logo = Logo::find(1);
        $features = Service::inRandomOrder()->limit(3)->get();
        $articles = Article::all();
        $contacts = Contact::all();

        return view('services', compact('titres', 'services', 'logo', 'features', 'articles', 'contacts'));
    }

    public function blog(){
        $posts = Blog::paginate(3)->fragment('blogPaginate');
        $categories = Categorie::all();
        $tags = Tag::all();
        return view('blog', compact('posts', 'categories', 'tags'));
    }

    public function blogp(){
        $categories = Categorie::all();
        $blog = Blog::all();
        $tags = Tag::all();
        return view('blog-post', compact('categories', 'blog', 'tags'));
    }
    public function contact(){
        $contacts = Contact::all();

        return view('contact', compact('contacts'));
    }
}
