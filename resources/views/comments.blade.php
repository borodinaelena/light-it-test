@foreach($comments as $comment)
    <ul class="media-list">
         <li class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="{{$comment->user->avatar}}" width="60px" height="60px">
             </a>
                <div class="media-body">
                     <h4 class="media-heading">{{$comment->user->name}}</h4>  
                     <p>{{$comment->content}}</p>
                     <p class="date pull-right">{{$comment->created_at->format('d M Y')}}</p>
                    
                    @if (!Auth::guest()) 
                        <button type="button" class="reply btn btn-default btn-sm">Reply</button>

	                    <form class="hidden" action="/comment/{{$comment->post_id}}/{{$comment->id}}" method="POST">
	                        <textarea class="form-control" rows="3" name="content"></textarea>
	                        <button type="submit" class="btn btn-default send-bt btn-xs">Send</button>
	                        <button type="button" class="cancel btn btn-default send-bt btn-xs">Cancel</button>
	                        {{ csrf_field() }}
	                    </form>
	                 @endif
                           
                             
                </div>
                @if($comment->relationLoaded('allCommentsWithUser'))
                    @include('comments', ['comments' => $comment->allCommentsWithUser])
                @endif
        </li>
    </ul> 
@endforeach
