

@push('css')
<!-- /Include CSS Files --> 

<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link rel="stylesheet" href="/css/main.css">
<!-- /Include CSS Files --> 
@endpush


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li><a href="/contactus">Contact us</a></li>
        
        <li class="dropdown">
        <!-- <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span>Login</a>
        <ul class="dropdown-menu">
            <li><a href="/login">Admin</a></li>
            <li><a href="#">User</a></li>
            
        </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>