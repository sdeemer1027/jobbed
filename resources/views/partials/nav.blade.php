<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
    <a class="navbar-brand" href="#"><!--SRD-->{{-- trans('panel.site_title') --}}Dr.Steve</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <div class="dropdown">
                    <button type="button" class="btn  nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-home fa-xs"></i> Home </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('home') }}"><img src="/images/evets-logo.png" height="25px;" alt="evets.pet"> Home</a>
                        <a class="dropdown-item" href="{{route('contactus')}}">Contact</a>
                        <a class="dropdown-item" href="{{route('aboutus')}}"><img src="/a1.jpg" height="25px;" alt="evets.pet"> About</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <div class="dropdown">
                    <button type="button" class="btn  nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-palette"></i> Arts
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item"  href="{{route('recipe')}}"><i class="fas fa-utensils" style='color:#000000'></i> Food</a>
                        <a class="dropdown-item"  href="#"><i class="fab fa-adobe" style='color:#000000'></i> PhotoShop</a>
                        <a class="dropdown-item"  href="#"><i class="fas fa-video" style='color:#000000'></i> Videos</a>
                        <a class="dropdown-item"  href="#"><i class="fas fa-camera" style='color:#000000'></i> Photography</a>
                        <a class="dropdown-item"  href="{{route('pencil')}}"><i class="fas fa-pencil-alt" style='color:#000000'></i> Pencil Art</a>
                        <a class="dropdown-item"  href="#"><i class="fas fa-music" style='color:#000000'></i> Music</a>
                        <a class="dropdown-item"  href="#"><i class="fas fa-feather-alt" style='color:#000000'></i> Writing</a>
                    </div>
                </div>

            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button type="button" class="btn nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-memory"></i>  Technology
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item"  href="{{route('weather')}}"> Weather</a>
                        <a class="dropdown-item"  href="#"><i class="fab fa-android" style='color:#000000'></i> Android</a>
                        <a class="dropdown-item"  href="#"><i class="fas fa-database" style='color:#000000'></i> Database</a>
                        <a class="dropdown-item"  href="#"><i class="fab fa-php" style='color:#000000'></i> PHP</a>
                        <a class="dropdown-item"  href="#"><i class="fab fa-css3" style='color:#000000'></i> CSS</a>
                        <!--
                        <a class="dropdown-item" href="#">Link 3</a>-->
                    </div>
                </div>
            </li>
<!--            <li class="nav-item">
                <div class="dropdown">
                    <button type="button" class="btn btn-secondary nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="far fa-file-word"></i> Resume
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="https://drive.google.com/file/d/1MJMHiuKdAANAKtubJsI4iDMFg-bTGPZc/view?usp=sharing" target='_new'><i class="fab fa-adobe"></i> PDF</a>
                        <a class="dropdown-item" href="https://drive.google.com/file/d/1vrhgLplBNM6avo86umAqk4oiP6e4Zlck/view?usp=sharing"><i class="far fa-file-word"></i> DOC</a>
                    </div>
                </div>

            </li>   -->
            <li class="nav-item">
                <div class="dropdown">
                    <button type="button" class="btn nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-memory"></i>  Domains
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fab fa-android" style='color:#000000'></i> Steven.News</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-database" style='color:#000000'></i> evetS.pet</a>
                        <a class="dropdown-item" href="#"><i class="fab fa-php" style='color:#000000'></i> pcwizard.club</a>
                        <a class="dropdown-item" href="#"><i class="fab fa-css3" style='color:#000000'></i> http://www.stevedeemer.com/</a>
                        <!--
                        <a class="dropdown-item" href="#">Link 3</a>-->
                    </div>
                </div>
            </li>

<li  class="nav-item">
            @guest

        <div class="dropdown">
            <button type="button" class="btn nav-link dropdown-toggle" data-toggle="dropdown">
                {{-- <i class="fas fa-memory"></i> --}}<i class="fa fa-user-circle"></i>  Account
            </button>
            <div class="dropdown-menu">
                @if (Route::has('login'))
                    <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                @endif
                @if (Route::has('register'))
                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </div>
        </div>
            @else
        <div class="dropdown">
            <button type="button" class="btn nav-link dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user-secret"></i>  Account
            </button>

                <div class="dropdown-menu">
                <a id="navbarDropdown" class="dropdown-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                </div>
        </div>
            @endguest
</li>


        </ul>

    </div>


    <SCRIPT language=javascript>
        <!-- Begin
        var ms=new Array(13);
        ms[1]="January";ms[2]="February";ms[3]="March";ms[4]="April";ms[5]="May";ms[6]="June";
        ms[7]="July";ms[8]="August";ms[9]="September";ms[10]="October";ms[11]="November";ms[12]="December";
        var time=new Date();var lmnth=ms[time.getMonth()+1];var date=time.getDate();var yr=time.getYear();
        if (yr<2000)
            yr=yr+1900;
        document.write("<left><font size =-1 color=#ffffff>"+"Today is:"+" "+lmnth+" "+date+", "+yr+"</font></center>");
        // End -->
    </SCRIPT>


</nav>


