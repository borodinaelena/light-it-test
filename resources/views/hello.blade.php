@extends('layouts.app')

@section('content')
<div class="container">

    <div class="panel panel-default">
    <h1 class="text-center">
Войдите с Facebook, чтобы писать сообщения.
</h1>
         <div class="panel-body">
            <a href="redirect"  class="btn btn-primary" id="login_fb">Facebook Login</a>
         </div>           
     </div>
</div>
@endsection