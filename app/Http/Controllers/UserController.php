<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeSender;
use App\Models\Genre;
use App\Models\Poste;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.main', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin', Auth::user()); 
        $roles = Role::all(); 
        $postes = Poste::all();
        $genres = Genre::all();
        return view('admin.user.create', compact('roles', 'postes', 'genres')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user, Request $request )
    {
        $this->authorize('admin', Auth::user()); 
        $request->validate([
            "nom" => "required",  
            "email" => "required",
        ]);
        $user = new User(); 
        $user->nom = $request->nom; 
        $user->email = $request->email; 
        $user->role_id = $request->role; 
        $user->poste_id = $request->poste;
        $user->genre_id = $request->genre;
        $user->password = Hash::make('labs2021'); 
        $user->save(); 
        Mail::to($user->email)->send(new WelcomeSender($user, 'labs2021'));
        
        return redirect()->back()->with('success', "User bien ajouté"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Auth::user()->id ==  $user->id  || Auth::user()->role_id <= 2){
            $roles  = Role::all(); 
            $postes = Poste::all(); 
            return view('admin.user.edit', compact('user', 'roles', 'postes')); 
        } else {
            return redirect()->route('dashboard')->with('error','Accès refusé'); 
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, Request $request)
    {
        $request->validate([
            "nom"       => "required",  
            "email"     => "required"
        ]);

        $user->nom      = $request->nom; 
        $user->email    = $request->email; 
        $user->role_id = $request->role_id; 
        $user->poste_id = $request->poste_id;

        if($request->file('img') != NULL){
            $request->file('img')->storePublicly('img/','public');
            $user->img = "img/". $request->file('img')->hashName();
        }
        $user->save();
        return redirect()->back()->with('success', 'Profil bien modifié');
    }
    public function updateMembre(User $user, Request $request)
    {
        $this->authorize('user', $user);
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|string',
            'photo_id' => 'required',
        ]);
        $user->nom = $request->nom;
        $user->email = $request->email;
        if($request->file('img') != NULL){
            $request->file('img')->storePublicly('img/','public');
            $user->img = "img/". $request->file('img')->hashName();
        }

        $user->save();
        return redirect()->back()->with('success', 'Votre profil a bien été modifié');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('admin');
        $user->delete();
        return redirect()->route('user.index')->with('warning', 'Utilisateur bien supprimé');
    }
}
