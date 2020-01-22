@extends('layouts.master')
@push('css')
<!-- /Include CSS Files --> 

<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link rel="stylesheet" href="/css/main.css">
<!-- /Include CSS Files --> 
@endpush

@section('content')

<h1>Hi, {{ $name }}</h1>
l<p>Sending Mail from Laravel.</p>


@endsection