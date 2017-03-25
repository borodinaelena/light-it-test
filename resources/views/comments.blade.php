@foreach($comments as $comment)
    <ul class="media-list">
         <li class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="{{$comment->user->avatar}}" width="60px" height="60px">
             </a>
                <div id="hide" class="media-body">
                     <h4 class="media-heading">{{$comment->user->name}}</h4>  
                     <p>{{$comment->content}}</p>
                     <p class="date pull-right">{{$comment->created_at->format('d M Y')}}</p>

                     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js">
							</script>
							<script type="text/javascript">   
							$(document).ready(function(){						  
							 
							      $("#hide>form").hide();
							   $("#but_opn").click(function(){
							      $("#comment_form:first-of-type").show(500);
							   });

							   $("#btn_close").click(function(){
							      $("#comment_form:first-of-type").hide(500);
							   });

							});                                           
							</script> 

                    
                           @if (!Auth::guest()) 
                        <button id="but_opn" type="button" class="btn btn-default btn-sm">Reply</button>

	                    <form  id="comment_form" action="/comment/{{$comment->post_id}}/{{$comment->id}}" method="POST">
	                        <textarea class="form-control" rows="3" name="content"></textarea>
	                        <button type="submit" class="btn btn-default send-bt btn-xs">Send</button>
	                        <button id="btn_close" type="button" class="btn btn-default send-bt btn-xs">Cancel</button>
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
