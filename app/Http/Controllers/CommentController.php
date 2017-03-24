<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    public function create(Request $request, $post_id, $parent_id)
    {
    	$parent = ($parent_id != '0') ? (int)$parent_id : null;
    	
    	$comment = new Comment([
    		'content' => $request->get('content'),
    		'post_id' => (int)$post_id,
    		'parent_id' => $parent
    	]);


    	$comment->user()->associate(Auth::user());
    	$comment->save();

    	return redirect()->to('/');
    }
}
