@extends('layouts.base')

@section('title','Single Comic')


                {{-- Da continuare --}}


@section('main-content')
<div class="upper-comic-section">
    <img class="w-100 jumbo" src="{{asset('images/jumbotron.jpg')}}" alt="">
    <div class="blueBar"></div>
    <img class="thumb" src="{{$comic['thumb']}}" alt="">
</div>
<div class="mid-comic-section mx-auto mt-5 flex gap-1">
    <div class="left">
        <h4>{{$comic['title']}}</h4>
        <div class="greenBar d-flex text-white p-2 mb-2">
            <div class="left w-75 flex px-2">
                <span><span class="opacity-75"> U.S. Price:</span> {{$comic['price']}}</span>
                <span class="opacity-75">AVAILABLE</span>
            </div>
            <div class="right w-25 text-center">
                <a href="">Check Availability</a>
            </div>
        </div>
        <p>{{$comic['description']}}</p>
    </div>
    <div class="right text-end">
        <span class="text-secondary fw-bold">ADVERTISMENT</span>
        <a href=""><img src="{{asset('images/addddddd.jpg')}}" alt="Ad"></a>
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