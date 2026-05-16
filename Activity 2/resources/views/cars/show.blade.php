@extends('layouts.app')

@section('content')

<div class="card">

    <img src="{{ $car['image'] }}" width="500">

    <h1>{{ $car['name'] }}</h1>

    <p><strong>Brand:</strong> {{ $car['brand'] }}</p>

    <p><strong>Type:</strong> {{ $car['type'] }}</p>

    <p><strong>Year Model:</strong> {{ $car['year'] }}</p>

    <p><strong>Price:</strong> {{ $car['price'] }}</p>

    <p><strong>Description:</strong> {{ $car['description'] }}</p>

    <br>

    <a href="/cars" class="btn">
        Back to Car List
    </a>

</div>

@endsection