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
      
     

<div class="container">
<div class="jumbotron">
<div class="header">

    <h1> Create New User</h1>


</div>

<div class="form">
    <form action="/signup/save" method="POST">
                    {{ csrf_field() }}
                    
			<div class="form-group">
                        
            <label for="frst"> First name :</label>
            <input class="form-control"id ="frst " type="text" name="firstname" placeholder="first name"required><br>
            <label for="lst"> last name :</label>
            <input class="form-control"id="lst" type= "text" name="lastname" placeholder="last name"required>
            <p></p>
            <label for="mail"> Email :</label>
            <input class="form-control" id="mail" type="email" name="username" placeholder="name@email.com"required><br>
            <label for="pss"> Password</label> :
            <input class="form-control"id="pss"  type ="password" name="password" value=""required>
            <br>
            <label>Upload file</label>
            <input type="file"  name="image" value="">
            <button class="btn btn-warning btn-lg" type="submit" name="submit"> Submit</button>
            </div>
						
						
    </form>
</div>

</div>
</div>
















@endsection