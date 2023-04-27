<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class ProjectController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return response()->json($posts)
        ->header('Access-Control-Allow-Origin', '*');
    }

    public function show(Post $post)
    {
        return view('guest.showProjects', compact('post'));
    }
}

