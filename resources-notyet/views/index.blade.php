@extends('layouts.main')

@section('content')
<div class="col-md-8 padding-20">
    <div class="row">
        <div class="col-md-12">
            <div class="fb-heading">
            {{--     Article Categories--}}
            </div>
            <hr class="style-three">
        </div>
            <div class="row">
                <div class="col-md-12">
                 Welcome to evetS.Pet <---> that is Steve if you spell it backwards<br/><br/>
 {{--                  in here we will talk a bit about Wamp what it is and how to use it - Laravel as a web framework - Ubuntu with apache
                 as well as PHP and versions... Then move into database.
                <p>
                    The fun does not stop at talk how about we show you how to install each and put them on a VPS Server
                    From there get you up and running...
                </p>
                <p>
                 I have been doing this for a round number we will say 35 to 40 years. This site is dedicated to helping me help you
                 so sit back as we develop each of the areas and get ready to launch your new world
                </p>
--}}
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-3"> {{--   @include('members') --}}</div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
     {{--       @include('members')    --}}
        </div>
        <div class="col-md-3"></div>
    </div>


</div>

    <div class="row">
@foreach($users as $user)

        <div class="col-md-3 gallery">
    {{$user->name}}<br/>
    <img src="{{$user->profifilepic}}"><br/>
            {{$user->email}}

        </div>
    @endforeach
    </div>






@endsection

