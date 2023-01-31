@extends('layouts/main')

@section('head')
    <title>Home</title>
@endsection

@section('movie')

    <div id="home" class="container d-flex pt-5 p-0">
        <ul class="row d-flex justify-content-between flex-wrap gap-3">
            @foreach ($movies as $movie)
                <li class="col-2">
                    <a class="card">
                        <h6>Title: {{$movie -> title}}</h6>
                        <span>Original Title: {{$movie -> original_title}}</span>
                        <span>Lang: {{$movie -> nationality}}</span>
                        <span>Date: {{$movie -> date}}</span>
                        <span>Vote: {{$movie -> vote}}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    

@endsection