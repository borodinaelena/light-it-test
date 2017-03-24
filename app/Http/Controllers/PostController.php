<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    public function create(Request $request)
    {
    	$post = new Post([
    		'content' => $request->get('new_post'),
    	]);

    	$post->user()->associate(Auth::user());
    	$post->save();

    	return redirect()->to('/');
    }
}
