<?php

namespace App\Http\Controllers;

use App\Mail\RegisterSender;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Role;
use App\Models\User;
use App\Models\Validate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ValidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $users = User::where('validate', 0)->get();
        $roles = Role::all();
         // $commentaires = Comment::all();
        $commentaires = Comment::where('validate', 0)->get();
        $articles = Blog::where('validate', 0)->where('trash', 0)->get();
        $users = User::where('validate', 0)->get();
         // $articles = Article::all();
        return view('admin.pages.validate', compact('roles','commentaires','articles', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateUser(User $id)
    {
        $user = $id;
        $user->validate = 1;
        $user->save();

        Mail::to($user->email)->send(new RegisterSender($user));

        return redirect()->back()->with('success', 'Membre validé');
    }

    public function updateCommentaire(Comment $id)
    {
        $commentaire = $id;
        $commentaire->validate = 1;
        $commentaire->save();
        return redirect()->back()->with('success', 'Commentaire validé');
    }

    public function deleteUser(User $id)
    {
        $user = $id;
        $user->delete();
        return redirect()->back()->with('success', 'User supprimé');
    }

    public function deleteComment(Comment $id)
    {
        $commentaire = $id;
        $commentaire->delete();
        return redirect()->back()->with('success', 'Commentaire supprimé');
    }

    public function updateArticle(Blog $id)
    {
        $post = $id;
        $post->validate = 1;
        $post->save();
        return redirect()->back()->with('success', 'Article validé');
    }
}
