@extends('layouts.app')

@section('title', 'Prodotti')

@section('content')
    <div class="card_container">
        <h2 class="title">I nostri tipi di pasta</h2>
        @foreach ($paste as $pasta)
            <div class="pasta_card">
                <img src="{{$pasta['src']}}" alt="">
                
                <div class="overlay card_over">
                    <h2>{{$pasta['titolo']}}</h2> 
                </div>

            </div>
        @endforeach
    </div>
    
@endsection