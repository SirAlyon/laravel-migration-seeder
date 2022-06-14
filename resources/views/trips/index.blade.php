@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        @foreach ($trips as $trip)
        <div class="col-4">

                <div class="trip">
                    <img src="{{$trip['image']}}" alt="">
                    <div class="destination">Destinazione: {{$trip['destination']}}</div>
                    <div>Durata: {{$trip['duration']}} gg</div>
                    <div>Prezzo: ${{$trip['price']}}</div>
                    <div>Posti Rimanenti: {{$trip['places']}}</div>
                </div>

        </div>
        @endforeach
    </div>
</div>

@endsection