@extends('layouts.master')

@push('css')
<!-- /Include CSS Files --> 

<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link rel="stylesheet" href="/css/main.css">
<!-- /Include CSS Files --> 
@endpush

@section('content')





<table border=1>
         <tr>
            <td>ID</td>
            <td>FirstName</td>
            <td>lastName</td>
            <td>username</td>
          
         </tr>
        
         @foreach ($stud as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->username }}</td>
            
         </tr>
         @endforeach
         
      </table>









@endsection