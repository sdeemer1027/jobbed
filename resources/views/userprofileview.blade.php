@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
              @include('partials.users')
            </div>
            <div class="col-md-9">
                <div class="card">
@foreach($userinfo as $user)                    
                    <div class="card-header">{{$user->name}}</div>                    
@endforeach
                    <div class="card-body">
                     {{--dd($userinfo)--}}
                        @foreach($userinfo as $user)
{{--$user->name--}} <!--  <br/>  -->
<div style="text-align: center;">
<a href="/user/profile/{{$user->id-1}}">ID({{$user->id-1}}) <<< PREVIOUS </a> ------------------ <a href="/user/profile/{{$user->id+1}}">  NEXT >>> ID({{$user->id+1}})</a>
</div>
                            <div class="row">
{{--
<a class="example-image-link" href="images/image-1.jpg" data-lightbox="example-1">
<img class="example-image" src="images/thumb-1.jpg" alt="Girl looking out people on beach">
</a>

 <a href="#myModal" data-toggle="modal" data-gallery="example-gallery" class="col-sm-3"
 data-img-url="{{asset('storage/'.$img->photo)}}">

--}}
                            @foreach($userpics as $pics)
                                    <div class="col-md-3 gallery"> 
                  <a href="#myModal{{$pics->id}}" data-toggle="modal" data-gallery="example-gallery" class="col-sm-3"
                                        data-img-url="{{ asset("storage/$pics->pic") }}">
                                       <img src="{{ asset("storage/$pics->pic") }}" class="d-block w-100">
                  </a>
                                    </div>


    <div id="myModal{{$pics->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img class="" src="{{asset("storage/$pics->pic")}}" width="100%"/>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                </div>
            </div>
        </div>
    </div>
                            @endforeach
                            </div>
                        @endforeach

                        <hr/>
                              {!! $user->description !!}
                        <hr/>
                              {!! $user->looking !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

