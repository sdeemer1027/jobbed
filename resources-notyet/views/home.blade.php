@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} <br/><br/>

<hr>
                        <div class="row">
 @foreach($users as $user)
{{--dd($user)--}}

     <div class="col-md-3 gallery">
<a href="user/profile/{{$user->id}}">
        <h5>{{$user->name}}</h5>
         <img src="{{ asset("storage/$user->profilepic") }}" width="50px;" class="img-circle"><br/>
         {{--$user->email--}}
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


</div>
</div>
</div>
</div>
</div>
@endsection
