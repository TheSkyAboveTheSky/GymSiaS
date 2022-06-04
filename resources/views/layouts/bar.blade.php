
    <header class="header">
      <div class="inner-width">
        <a href="#" class="logo"><img src="{{url("/images/logo.png")}}" alt=""></a>
        <i class="menu-toggle-btn fas fa-bars"></i>
        <nav class="navigation-menu ">
                    <a href="#"><i class="fas fa-home home"></i> Home</a>
                    <a href="#"><i class="fas fa-align-left about"></i> About</a>
                    @if(auth()->check())
                            <a href="{{route('profile.show')}}">
                              <i class="fas fa-regular fa-user" style="color:green"></i>
                              {{auth()->user()->name}}
                            </a>

                            @if (Auth::user()->role_id === 0)
                                            <a href="{{url('/planning')}}">
                                              <i class="fas fa-solid fa-calendar" style="color:yellow"></i>                               
                                                             Planning
                                            </a>
                                            <a href="{{url('/coachs')}}">
                                              <i class="fas fa-solid fa-dumbbell" style="color:aqua"></i> 
                                              Coachs List
                                            </a>
                                            <a href="{{url('/coachs')}}">
                                              <i class="fas fa-regular fa-clipboard-check" style="color:orange"></i>                                          
                                                  Seances                            
                                            </a>
                                            <a href="{{url('/coachs')}}">
                                              <i class="fas fa-solid fa-dumbbell" style="color:red"></i> 
                                              Offres
                                            </a>
                                            <a href="{{url('/logout')}}">
                                              <i class="fas fa-sign-in-alt" style="color:blue"></i>                                              
                                              Log-out
                                            </a>

                            @endif
                    @else
                            <a href="{{url('/register')}}">
                              <i class="fas fa fa-calendar	
                              "></i>
                              Sign-up
                            </a>
                            <a href="{{url('/login')}}">
                              <i class="fas fa-sign-in-alt"></i>
                              Sign-in
                            </a>
                    @endif
        </nav>
      </div>
    </header>