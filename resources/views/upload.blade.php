@extends('layouts.master')

@push('css')
<!-- /Include CSS Files --> 

<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link rel="stylesheet" href="/css/main.css">
<!-- /Include CSS Files --> 
@endpush

@section('content')

<html>
<head>

<title>upload</title>
</head>

<body>
<form class="" action="{{URL::to('/store')}}" enctype="multipart/form-data" method="post">
<input type="file" name="image" value="">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<br>
<button type="submit" name="button">Upload image</button>
</form>


</body>


</html>


@endsection