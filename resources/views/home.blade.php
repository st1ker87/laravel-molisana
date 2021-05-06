@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <div class="home">
        <img class="home_img" src="{{ asset('img/molisana-home.jpg') }}" alt="">
        <div class="overlay home_over">
            <i class="far fa-plus-square"></i>
        </div>
    </div>
    
@endsection