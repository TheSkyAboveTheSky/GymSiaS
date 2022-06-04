<header class="header">
  <a href="#login" class="logo">
     <span>Moun</span>Tor
  </a>
  <nav class="topnav" id="myTopnav">
     <a href="#" class="active">ACCUEIL</a>
     <a href="#">ABOUT US</a>
     @if(auth()->check())
          <a href="{{route('profile.show')}}">
            {{auth()->user()->name}}
          </a>
     @else
          <a href="{{url('/register')}}">
            Sign-up
          </a>
          <a href="{{url('/login')}}">
            Sign-in
          </a>
     @endif
     <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
  </nav>
</header>