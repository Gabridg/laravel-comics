@extends('layouts.main')

@section('comics')
<div id="view-gallery">
    <div class="container">
        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}} image">    
    </div>
</div>
<div class="container">
    <h2>{{$comic['title']}}</h2>
    <p>{{$comic['description']}}</p>
</div>
