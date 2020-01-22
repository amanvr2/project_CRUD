@extends('layouts.master')

@push('css')
<!-- /Include CSS Files --> 

<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link rel="stylesheet" href="/css/main.css">
<!-- /Include CSS Files --> 
@endpush

@section('content')

<div class="header">
<h1> Welcome Admin </h1> 
<h3> You can ADD , Delete and Modify user </h3>

</div>


<div class="board">

<div class="board-list">



<a href="/view-records" class="btn btn-success" role="button">View Users</a>

<a href="/signup" class="btn btn-danger" role="button">Add User</a>

<a href="/edit-records" class="btn btn-primary" role="button">Modify User</a>

</div>



</div>








@endsection