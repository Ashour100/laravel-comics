@extends('layouts.base')

@section('title','Comics')
@section('main-content')
<div class="comics position-relative text-center">
    <img class="w-100 jumbo" src="{{asset('images/jumbotron.jpg')}}" alt="">
    <div class="px-3 py-2 bg-primary title fw-bold fs-5">CURRENT SERIES</div>
    <div class="contentContainer mx-auto d-flex flex-wrap gap-4 my-5">
        @foreach ($comics as $key=> $comic)
        <a href="{{Route::currentRouteName()}}/{{$key}}">
            <div class="icon text-start">
                <img class="w-100 mb-2" src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                <span class="text-uppercase">{{$comic['series']}}</span>
            </div>
        </a>
        @endforeach
    </div>
    <button class="border-0 text-white bg-primary px-5 py-2 fw-bolder mb-3">LOAD MORE</button>
</div>

@endsection
