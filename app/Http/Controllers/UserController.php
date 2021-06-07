<?php

namespace App\Http\Controllers;

use App\Models\Poste;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            return redirect()->route('dashboard')->with('error','Access refusé'); 
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

        if($request->has('role')){
            $user->role_id = $request->role; 
        }
        if($request->has('poste')){
            $user->poste_id = $request->role;
        }  

        if($request->file('img') != NULL){
            $request->file('img')->storePublicly('img/','public');
            $user->image = "img/". $request->file('img')->hashName();
        }

        $user->save();
        return redirect()->back()->with('success', 'Profil bien modifié');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {
        $this->authorize('isAdmin');
        $id->delete();
        return redirect()->route('user.index')->with('warning', 'Utilisateur bien supprimé');
    }
}
