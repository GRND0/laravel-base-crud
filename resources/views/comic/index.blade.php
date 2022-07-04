
@extends('layouts.app')

@section('main')
  <ul>
    @foreach ($comic_list as $comic)
    <li>
        <a href="{{ route('comic.show', ['comic' => $comic->id]) }}">
            {{ $comic->title }}
        </a>
        <p>
            {{$comic->description}}
        </p>
        <h4>{{$comic->price}}
        </h4>
        <h3>{{$comic->series}}
        </h3>
        <h5>
            {{$comic->type}}
        </h5>
    </li>
    @endforeach
</ul>  
@endsection


