@extends('layouts.app')

@section('main')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <p>{{ $comic->description }}</p>
        <p> {{ $comic->price }}</p>
        <p> {{ $comic->series }}</p>


    </div>
@endsection