<?php

namespace ahmetbarut\PackageDevelopment\Http\Controllers;

use App\Http\Controllers\Controller;
use ahmetbarut\PackageDevelopment\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        return view('laravelIstanbul::index')->with('posts', Post::all());
    }
}
