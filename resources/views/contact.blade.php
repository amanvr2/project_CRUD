@extends('layouts.master')

@push('css')
<!-- /Include CSS Files --> 

<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link rel="stylesheet" href="/css/main.css">
<!-- /Include CSS Files --> 
@endpush

@section('content')



@if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
@endif

@if($message= Session::get('success'))

    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{$message}}</strong>
    </div>
@endif
      
     

<div class="container">
<div class="jumbotron">
<div class="header">

    <h1> Submit Your Query</h1>


</div>

<div class="form">
    <form action="/contactus/go" method="POST">
                    {{ csrf_field() }}
                    
			<div class="form-group">
                        
            <label for="name"> Name :</label>
            <input class="form-control"id ="name " type="text" name="name" placeholder="Name"required><br>
            <p></p>
            <label for="email"> Email :</label>
            <input class="form-control" id="email" type="email" name="username" placeholder="name@email.com"required><br><br>

            <label for="message"> Enter Your message</label> :
            <textarea class="form-control" name="message" value=""required></textarea>
            <br>
            <button class="btn btn-warning btn-lg" type="submit" name="submit"> Submit</button>
            </div>
						
						
    </form>
</div>

</div>
</div>
















@endsection