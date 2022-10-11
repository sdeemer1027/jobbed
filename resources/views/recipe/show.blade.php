@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">Home > Food </div>
            <div class="col-md-12">
                @foreach($gethisdinner as $dindin)
                @endforeach
               <h3> {{$dindin->title}} </h3>
            @foreach($gethisdinner as $dindin)
                <li>({{$dindin->amount}} {{$dindin->measurement}}) {{$dindin->ingredient}}</li>
                    {{--dd($dindin,$gethisdinner)--}}
                @endforeach
            </div>
        </div>
    </div>

@endsection
