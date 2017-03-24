<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::with([
          'comments',
          'parentComments.user',
          'parentComments.allCommentsWithUser'
        ])->orderBy('created_at', 'DESC')->get();

        return view('index', ['posts' => $posts]);   
    }   
}
