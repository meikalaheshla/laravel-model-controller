@extends('layouts.main')
@section('main-content')
<div class="container">
    <div class="row">
        @forelse($movies as $movie)
        <div class="col-4">
            <div class="my-card">
                <h1>{{$movie->title}}</h1>
                <h2>{{$movie->original_title}}</h2>
                <h3>{{$movie->date}}</h3>
            </div>
        </div>
        @empty
        <h3>Nessun film disponibile</h3>
        @endforelse
    </div>
</div>
@endsection