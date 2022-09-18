@extends('layouts.main')

@section('comics')
<div class="main-content">
    <div class="container">
        <div class="current-series">
            <h2>
                CURRENT SERIES
            </h2>
        </div>
        <div class="d-flex">
            @foreach($comics as $comic)
            <a href="{{ route('show', ['id' => $loop->index]) }}" class="comic-card">
                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}" class="comics">
                <p class="comics-text">{{$comic['series']}}</p>
            </a>
            @endforeach
        </div>
        <div class="load-div text-center">
            <a href="#" class="load-button">LOAD MORE</a>
        </div>
    </div>
</div>
@endsection