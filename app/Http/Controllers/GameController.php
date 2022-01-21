<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class GameController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('Games.juegos', compact('users'));
    }

    public function suma()
    {
        $post = Post::paginate(10);
        return view('Games.suma', compact('post'));
    }
}
