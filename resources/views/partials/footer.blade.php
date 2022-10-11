<BR><BR><BR>
<div class="text-center footer bg-secondary" style="margin-bottom:0">
    <div class="dropdown">
        <button type="button" class="btn btn-secondary-white nav-link" data-toggle="dropdown">
            <i class="fab fa-windows"></i> START
        </button>
        <div class="dropdown-menu" >
            <a class="dropdown-item" href="{{ route('home') }}"><i class="fas fa-home fa-xs" style='color:#000000'></i> Home</a><HR>
            @guest
                @if (Route::has('login'))
                    <i class="fas fa-sign-in-alt" style='color:#000000'></i>        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif
                @if (Route::has('register'))
                        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                    <a id="navbarDropdown" class="dropdown-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fa fa-user-circle"  style='color:#000000'></i>       {{ Auth::user()->name }}
                    </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt" style='color:#000000'></i>      {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
        @endguest


            <!--
            <a class="dropdown-item" href="nba/">      <i class="fas fa-basketball-ball"></i>  NBA</a><HR>
-->
            <HR>
            <a class="dropdown-item"  href="#"><i class="fas fa-database" style='color:#000000'></i> Database</a>
            <a class="dropdown-item"  href="{{route('recipe')}}"><i class="fas fa-utensils" style='color:#000000'></i> Food</a>
            <a class="dropdown-item"  href="#"><i class="fab fa-adobe" style='color:#000000'></i> PhotoShop</a>
            <a class="dropdown-item"  href="#"><i class="fas fa-video" style='color:#000000'></i> Videos</a>
            <a class="dropdown-item"  href="#"><i class="fas fa-camera" style='color:#000000'></i> Photography</a>
            <a class="dropdown-item"  href="{{route('pencil')}}"><i class="fas fa-pencil-alt" style='color:#000000'></i> Pencil Art</a>
            <a class="dropdown-item"  href="#"><i class="fas fa-music" style='color:#000000'></i> Music</a>
            <a class="dropdown-item"  href="#"><i class="fas fa-feather-alt" style='color:#000000'></i> Writing</a>


        </div>
    </div>




    <script>
 //       $(document).ready(function(){
 //           $('.dropdown-submenu a.test').on("click", function(e){
 //               $(this).next('ul').toggle();
 //               e.stopPropagation();
 //               e.preventDefault();
 //           });
 //       });
    </script>

