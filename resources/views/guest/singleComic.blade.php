@extends('layouts.base')

@section('title','Single Comic')


                {{-- Da continuare --}}


@section('main-content')
<img class="w-100" src="../img/jumbotron.jpg" alt="">
<img src="{{$comic['thumb']}}" alt="">
<div class="mid-comic-section px-5">
    <div class="left">
        <h1>{{$comic['title']}}</h1>
        <div class="greenBar d-flex bg-success w-50 text-white p-2">
            <div class="left w-75">
                <span> U.S. Price: {{$comic['price']}}</span>
                <span class="ms-auto">AVAILABLE</span>
            </div>
            <div class="right">
                <span>Check Availability</span>
            </div>
        </div>
        <p class="w-50">{{$comic['description']}}</p>
        
    </div>
    <div class="left">
        <img src="images/adv.jpg" alt="">
    </div>
</div>
<div class="bottom-comic-section d-flex justify-content-between gap-3 w-50 mx-auto ">
    <div class="left w-50">
        <h3>Talent</h3>
        <hr>
        <span>Art by:</span>
        <span>
            @foreach ($comic['artists'] as $name)
            <a href="#">{{$name}}</a>
            @if (!$loop->last)
            ,
            @endif
        @endforeach
        </span>
        <hr>
        <span>Written by:</span>
        <span>
            @foreach ($comic['writers'] as $name)
                <a href="#">{{$name}}</a>
                @if (!$loop->last)
                ,
                @endif
            @endforeach
        </span>
    </div>
    <div class="right w-50">
        <h3>Specs</h3>
        <hr>
        <span>Series:</span>
        <span>{{$comic['series']}}</span>
        <hr>
        <span> U.S. Price:</span>
        <span>{{$comic['price']}}</span>
        <hr>
        <span>On Sale Date:</span>
        <span>{{$comic['sale_date']}}</span>
    </div>
</div>
@dump($comic)
@endsection