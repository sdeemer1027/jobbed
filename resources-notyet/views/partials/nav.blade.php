<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
    <a class="navbar-brand" href="#"><!--SRD-->{{-- trans('panel.site_title') --}}Dr.Steve</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <div class="dropdown">
                    <button type="button" class="btn btn-secondary nav-link dropdown-toggle" data-toggle="dropdown"">
                        <i class="fas fa-home fa-xs"></i> Home </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('home') }}"><img src="/images/evets-logo.png" height="25px;" alt="evets.pet"> Home</a>
                        <a class="dropdown-item" href="#">Contact</a>
                        <a class="dropdown-item" href="#">About</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <div class="dropdown">
                    <button type="button" class="btn btn-secondary nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-palette"></i> Arts
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="food.php"><i class="fas fa-utensils"></i> Food</a>
                        <a class="dropdown-item" href="photoshop.php"><i class="fab fa-adobe"></i> PhotoShop</a>
                        <a class="dropdown-item" href="video.php"><i class="fas fa-video"></i> Videos</a>
                        <a class="dropdown-item" href="photography.php"><i class="fas fa-camera"></i> Photography</a>
                        <a class="dropdown-item" href="sketching.php"><i class="fas fa-pencil-alt"></i> Pencil Art</a>
                        <a class="dropdown-item" href="music.php"><i class="fas fa-music"></i> Music</a>
                        <a class="dropdown-item" href="writing.php"><i class="fas fa-feather-alt"></i> Writing</a>
                    </div>
                </div>

            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button type="button" class="btn btn-secondary nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-memory"></i>  Technology
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="andriod.php"><i class="fab fa-android"></i> Android</a>
                        <a class="dropdown-item" href="database.php"><i class="fas fa-database"></i> Database</a>
                        <a class="dropdown-item" href="phpexam.php"><i class="fab fa-php"></i> PHP</a>
                        <a class="dropdown-item" href="cssexam.php"><i class="fab fa-css3"></i> CSS</a>
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
                    <button type="button" class="btn btn-secondary nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-memory"></i>  Domains
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fab fa-android"></i> Steven.News</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-database"></i> evetS.pet</a>
                        <a class="dropdown-item" href="#"><i class="fab fa-php"></i> pcwizard.club</a>
                        <a class="dropdown-item" href="#"><i class="fab fa-css3"></i> http://www.stevedeemer.com/</a>
                        <!--
                        <a class="dropdown-item" href="#">Link 3</a>-->
                    </div>
                </div>
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


