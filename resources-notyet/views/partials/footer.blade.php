<BR><BR><BR>
<div class="text-center footer bg-secondary" style="margin-bottom:0">
    <div class="dropdown">
        <button type="button" class="btn btn-secondary nav-link" data-toggle="dropdown">
            <i class="fab fa-windows"></i> START
        </button>
        <div class="dropdown-menu" style="background-color:#CFCFCF;">
            <a class="dropdown-item" href="{{ route('home') }}"><i class="fas fa-home fa-xs"></i> Home</a><HR>
            @guest
                @if (Route::has('login'))
                       <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif
                @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
        @endguest


            <!--
            <a class="dropdown-item" href="nba/">      <i class="fas fa-basketball-ball"></i>  NBA</a><HR>
-->
            <a class="dropdown-item" href="database.php"><i class="fas fa-database"></i> Database</a><HR>
            <a class="dropdown-item" href="food.php"><i class="fas fa-utensils"></i> Food</a>
            <a class="dropdown-item" href="photoshop.php"><i class="fab fa-adobe"></i> PhotoShop</a>
            <a class="dropdown-item" href="video.php"><i class="fas fa-video"></i> Videos</a>
            <a class="dropdown-item" href="photography.php"><i class="fas fa-camera"></i> Photography</a>
            <a class="dropdown-item" href="sketching.php"><i class="fas fa-pencil-alt"></i> Pencil Art</a>
            <a class="dropdown-item" href="music.php"><i class="fas fa-music"></i> Music</a>
            <a class="dropdown-item" href="writing.php"><i class="fas fa-feather-alt"></i> Writing</a>


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

