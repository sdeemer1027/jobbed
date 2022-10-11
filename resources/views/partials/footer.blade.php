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
             <a class="dropdown-item" href="{{ route('login') }}"><i class="fas fa-sign-in-alt" style='color:#000000'></i> {{ __('Login') }}</a>
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


            <HR>
           

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

