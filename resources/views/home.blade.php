@extends('layouts.app')

@section('content')
<div id="title" style="text-align: center;">
    <h1>Learn Laravel 5</h1>
    <div style="padding: 5px; font-size: 16px">
        Learn Laravel 5
    </div>
</div>
<hr>
<!-- <example-component></example-component> -->
<router-view></router-view>
<div id="content">
    <ul>
        @foreach($articles as $article)
        <li style="margin: 50px 0;">
            <div class="title">
                <a href="{{ url('articles/'.$article->id) }}">
                    <h4>{{ $article->title }}</h4>
                </a>
            </div>
            <div class="body">
                <p>{{ $article->body }}</p>
            </div>
        </li>
        @endforeach
    </ul>
</div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
