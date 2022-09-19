@extends('layouts.main')
@section('main-content')
<div class="container">
    <div class="row">
        @forelse($movies as $movie)
        <div class="col-6">
            <div class="my-card">
                <h1>{{$movie->title}}</h1>
            </div>
        </div>
        @empty
        <h3>Nessun film disponibile</h3>
        @endforelse
    </div>
</div>
@endsection