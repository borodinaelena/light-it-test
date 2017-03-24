@extends('layouts.app')

@section('content')
<div class="container">

 @if (Auth::guest()) 
<h4>Please login to post messages.</h4>
 @else
    <div class="panel panel-default panel2">   
    <form action="/add-post" method="POST">
    	<h4> New post.</h4>
        <textarea class="form-control" rows="3" name="new_post"></textarea>
        <button type="submit" class="btn btn-default send-bt">Send</button>
    </form>
    </div>
@endif

<div class="panel panel-default panel1">
@foreach($posts as $post)

	<ul class="media-list comment">
	  <li class="media">
	    <a class="pull-left" href="#">
	      <img class="media-object" src="http://fakeimg.pl/60x60/">
	    </a>
	        <div class="media-body">
	            <h4 class="media-heading">{{$post->user->name}}</h4>
	                <p>{{$post->content}}</p>
	                <p class="date pull-right">{{$post->created_at->format('d M Y')}}</p>
	                <p class="pull-right">{{$count = $post->comments->count()}} Comments</p>
	                 
	                  @if (!Auth::guest()) 
                        <button type="button" class="btn btn-default btn-sm">Reply</button>
	                    <form>
	                        <textarea class="form-control" rows="3"></textarea>
	                        <button type="button" class="btn btn-default send-bt btn-xs">Send</button>
	                        <button type="button" class="btn btn-default send-bt btn-xs">Cancel</button>
	                    </form>
	                 @endif
	        </div>
	            <!-- comments here -->
	            @if($count && $post->relationLoaded('parentComments'))
	                @include('comments', ['comments' => $post->parentComments])
	            @endif

	    </li>
	</ul>  
@endforeach

</div>
@endsection