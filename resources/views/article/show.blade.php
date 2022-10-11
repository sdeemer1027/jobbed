
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">



@section('title', $article->title)
@section('description', $article->description)


    <h1>{{ $article->title }}</h1>
    {!! $article->content !!}



            </div>
        </div>
    </div>

@endsection

