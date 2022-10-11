@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-sm-12">Home > Food </div>
        <div class="row justify-content-center">
            <div class="col-md-12">

               <h3> Recipe on file </h3>
@foreach($dinner as $dindin)
                    <li><a href="/recipe/{{$dindin->recipe_id}}">{{$dindin->title}}</a></li>

                @endforeach
            </div>
        </div>
    </div>

@endsection
