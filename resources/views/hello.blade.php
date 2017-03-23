@extends('layouts.app')

@section('content')
<div class="container">

 @if (Auth::guest()) 
<h4>Please login to post messages.</h4>
 @else
    <div class="panel panel-default panel2">   
    <form>
        <textarea class="form-control" rows="3"></textarea>
        <button type="button" class="btn btn-default send-bt">Отправить</button>
    </form>
    </div>
@endif

<div class="panel panel-default panel1">   
<ul class="media-list comment">
  <li class="media">
    <a class="pull-left" href="#">
      <img class="media-object" src="http://fakeimg.pl/60x60/">
    </a>
        <div class="media-body">
            <h4 class="media-heading">ЛОГИН</h4>
                <p>
                     текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария 
                 </p>
                 
                      <button type="button" class="btn btn-default btn-xs">коментирвоать</button>
                      <p class="date pull-right">
                     01.01.01
                    </p>
                    <form>
                        <textarea class="form-control" rows="3"></textarea>
                        <button type="button" class="btn btn-default send-bt btn-xs">Отправить</button>
                        <button type="button" class="btn btn-default send-bt btn-xs">Отмена</button>
                    </form>
                 
        </div>
            <ul class="media-list">
                 <li class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://fakeimg.pl/60x60/">
                     </a>
                        <div class="media-body">
                             <h4 class="media-heading">ЛОГИН</h4>  
                             <p>
                                 текст коментария текст коментария 
                             </p>
                            
                                  <button type="button" class="btn btn-default btn-xs">коментирвоать</button>
                                   <p class="date pull-right">
                                     01.01.01
                                    </p>
                                     
                        </div>
                            <ul class="media-list">
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="http://fakeimg.pl/60x60/">
                                    </a>
                                        <div class="media-body">
                                             <h4 class="media-heading">ЛОГИН</h4>
                                             <p>
                                                 текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария текст коментария 
                                             </p>
                                             
                                                  <button type="button" class="btn btn-default btn-xs">коментирвоать</button>
                                                   <p class="date pull-right">
                                                     01.01.01
                                                    </p>
                                                              
                                        </div>
                                </li>
                            </ul> 
                </li>
            </ul> 

    </li>
</ul>   
</div>
</div>
@endsection