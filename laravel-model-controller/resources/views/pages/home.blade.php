@extends('layouts/main')

@section('head')
    <title>Home</title>
@endsection

@section('movie')

    <div id="home" class="container d-flex pt-5">
        <ul class="row d-flex flex-wrap gap-3">
            @foreach ($movies as $item)
                <li class="col-2">
                    <div class="card">
                        <h6>Title: {{$item -> title}}</h6>
                        <span>Original Title: {{$item -> original_title}}</span>
                        <span>Lang: {{$item -> nationality}}</span>
                        <span>Date: {{$item -> date}}</span>
                        <span>Vote: {{$item -> vote}}</span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    

@endsection