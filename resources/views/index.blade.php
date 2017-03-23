@extends('layouts.app')

@section('content')
<div class="container">

 @if (Auth::guest()) 
<h4>Please login to post messages.</h4>
 @else
    <div class="panel panel-default panel2">   
    <form action="/add-post" method="POST">
        <textarea class="form-control" rows="3"></textarea>
        <button type="submit" class="btn btn-default send-bt">Отправить</button>
    </form>
    </div>
@endif
@endsection