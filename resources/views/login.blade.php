@extends('layouts.master')
@push('css')
<!-- /Include CSS Files --> 

<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link rel="stylesheet" href="/css/main.css">
<!-- /Include CSS Files --> 
@endpush

@section('content')

<div class="container">
<div class="jumbotron">
    
    <h1> Admin Log In</h1>
    <br>
    <form method="POST">
    {{ csrf_field() }}
      <div class="forms">
        <label for="username"> Username</label>
        <input class="form-control"id="username" type="email" name="username" placeholder="username@email.com" required>
        <br>
        <label for="password"> Password</label>
        <input class="form-control"id="password" type="password" name="password" required>
        <input type="checkbox">
        <small class="form-text text-muted"> remember me</small>
        <br><button class="btn btn-success btn-lg" type="submit" name="submit"> log in</button>
        
      </div>
        
    
    </form>
</div>
</div>
      
     
















@endsection