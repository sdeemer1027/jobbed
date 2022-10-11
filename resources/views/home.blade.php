@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">


            @if(Auth::user())
@include('partials.left')

            @else
                @include('partials.guestleft')

            @endif






        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} <br/><br/>


@foreach($uare as $u)
{{--$u->name--}}
<img src="{{ asset("$u->profilepic") }}" class="img-thumbnail" alt="{{$u->name}}" width="100">
@endforeach
@foreach($mypics as $mypic)
@if($mypic->pic)
 <img src="{{ asset("/$mypic->pic") }}" class="img-thumbnail" alt="{{$u->name}}" width="100">
 @else
    Sorry you have no additional Photos<br/>
    @endif
@endforeach


<hr>

                        <div class="row">
        @if(auth()->id() =='1')



 @foreach($users as $user)
{{--dd($user)--}}

     <div class="col-md-3 gallery">
<a href="user/profile/{{$user->id}}">
        <h5>{{$user->name}}</h5>
    @if($user->profilepic)
         <img src="{{ asset("$user->profilepic") }}" width="50px;" class="img-circle"><br/>
         {{--$user->email--}}



    @endif
     </a>
     </div>
                                {{--
                   <div class="col-md-1"></div>
                   <div class="col-md-9">
                            {{--
                                 {!!html_entity_decode($user->descriptio
                         {{--                         <hr/>
                                  {!!html_entity_decode($user->looking)!!}
      </div>
                        --}}


 @endforeach
                        </div>
                        <hr/>
 {{$users}}
 <hr/>
                        @endif

</div>
</div>
</div>
</div>
</div>
@endsection
