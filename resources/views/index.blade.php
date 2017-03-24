@extends('layouts.app')

@section('content')
<div class="container">


 @if (Auth::guest()) 
<h4>Please login to post messages.</h4>
 @else
    <div class="panel panel-default panel2">   
    <form action="/post" method="POST">
    	<h4> New post.</h4>
        <textarea class="form-control" rows="3" name="new_post"></textarea>
        <button type="submit" class="btn btn-default send-bt">Send</button>
        {{ csrf_field() }}
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

							<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js">
							</script>
							<script type="text/javascript">   
							$(document).ready(function(){
							  
							 
							      $("#com").hide();
							   $("#but_oppen").click(function(){
							      $("#com").show(500);
							   });

							   $("#but_close").click(function(){
							      $("#com").hide(500);
							   });

							});                                           
							</script> 

	                 
	                  @if (!Auth::guest()) 
                        <button id="but_oppen" type="button" class="btn btn-default btn-sm">Reply</button>
	                    <form id="com" action="/comment/{{$post->id}}/0" method="POST" class="">
	                        <textarea class="form-control" rows="3" name="content"></textarea>
	                        <button type="submit" class="btn btn-default send-bt btn-xs">Send</button>
	                        <button id="but_close" type="button" class="btn btn-default send-bt btn-xs">Cancel</button>
	                        {{ csrf_field() }}
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