@extends('template.base')

@section('title', 'HomePage')
@section('main')
    <div class="container">
        <h1>View Monsters Listings</h1>
        <a href="{{ route('monsters.index') }}">View Listings</a>
    </div>
@endsection
