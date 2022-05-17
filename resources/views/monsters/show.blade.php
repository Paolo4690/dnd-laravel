@extends('template.base')

@section('title', 'Monster Page')

@section('main')
    <main>
        <div class="container my-5">
            <div class="row">
                <div class="col-6 offset-3">

                    <div class="card" style="width: 18rem;">
                        <div class="card-img-top text-white py-3">
                            <h5>{{ $monster->name }}</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">{{ $monster->type }}</h6>
                            <p class="card-text">My name is{{ $monster->name }} and I'm a DnD's monster!</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Alignment: {{ $monster->alignment }}</li>
                            <li class="list-group-item">Hit Points: {{ $monster->hit_points }}</li>
                            <li class="list-group-item">XP: {{ $monster->xp }}</li>
                        </ul>
                        <div class="card-body">
                            <a href="{{ route('monsters.edit', $monster) }}" class="card-link">Edit</a>
                            <form action="{{ route('monsters.destroy', $monster) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    Delete
                                </button>
                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </main>
@endsection
