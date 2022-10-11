<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dr.Steve</title>

        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <!--           <link href="{{ asset('css/style.css') }}" rel="stylesheet">        -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
        <script src="/js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a0eba55c1f.js"></script>


        <style>


            .imgout{
                border: 1px solid #ddd;
                border-radius: 4px;
                padding: 5px;
                width: 150px;

            }

            div.gallery {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 180px;
            }

            div.gallery:hover {
                border: 1px solid #777;
            }

            div.gallery img {
                width: 100%;
                height: auto;
            }

            div.desc {
                padding: 15px;
                text-align: center;
            }
        </style>




        </style>


    </head>
    <body>
        @include('partials.nav')
        <div class="container featured-area-default padding-30">
            <div class="row">
                <div class="col-1"><img src="/images/evets-logo.png" height="35px" alt="evets.pet"></div>
            </div>
            <div class="row">
                @yield('content')
{{--
                @if(!isset($exception))
                    @include('partials.sidebar')
                @endif
--}}
            </div>
        </div>
        @include('partials.footer')
        <script src="{{ asset('js/app.js') }}"></script>
        <script src='https://cdn.rawgit.com/VPenkov/okayNav/master/app/js/jquery.okayNav.js'></script>
    </body>
</html>
