@extends('layouts.app')

@section('content')

<h2>Available Cars</h2>

@foreach($cars as $car)

<div class="card">

    <img src="{{ $car['image'] }}" width="300">

    <h2>{{ $car['name'] }}</h2>

    <p><strong>Brand:</strong> {{ $car['brand'] }}</p>

    <p><strong>Type:</strong> {{ $car['type'] }}</p>

    <p><strong>Price:</strong> {{ $car['price'] }}</p>

    <a href="/cars/{{ $car['id'] }}" class="btn">
        View Details
    </a>

</div>

@endforeach

@endsection