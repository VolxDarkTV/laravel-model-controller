@extends('layouts/main')

@section('head')
    <title>Home</title>
@endsection

@section('movie')

    <div id="home">
        <ul class="d-flex gap-3">
            @foreach ($movie as $item)
                <li>
                    <div class="card">
                        <h6>Title: {{$item['title']}}</h6>
                        <span>Original Title: {{$item['original_title']}}</span>
                        <span>Lang: {{$item['nationality']}}</span>
                        <span>Date: {{$item['date']}}</span>
                        <span>Vote: {{$item['vote']}}</span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

@endsection