@extends('template.base')

@section('title', 'Lista Mostri')

@section('main')
    <main>
        <div class="container my-3">
            <div class="row row-cols-4">
                @foreach ($monsters as $monster)
                <div class="col">

                    <div class="card mb-3" style="width: 18rem;">
                        <div class="card-img-top bg-dark text-white px-1 py-3">
                            <h5><i class="fa-solid fa-ghost"></i>&nbsp;{{ $monster->name }}</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">{{ $monster->type }}</h6>
                            <p class="card-text">My name is {{ $monster->name }} and I'm a DnD's monster!</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Alignment: {{ $monster->alignment }}</li>
                            <li class="list-group-item">Hit Points: {{ $monster->hit_points }}</li>
                            <li class="list-group-item">XP: {{ $monster->xp }}</li>
                        </ul>
                        <div class="card-body">
                            <a href="{{ route('monsters.show', $monster->index) }}" class="card-link">View monster</a>

                            <button class="btn btn-danger btn_delete" data-id="{{ $monster->index }}"  >Delete Monster</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="overlay d-none">
                <div class="confirmation">
                    <h3>Sei sicuro di voler eliminare il monster?</h3>
                    <div class="d-flex justify-content-center gap-2">
                        <button id="btn-no" class="btn btn-success mb-2">NO</button>
                        <form class="form" data-base="{{ route('monsters.index') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mb-2">ELIMINA</button>
                        </form>
                    </div>

                </div>
            </div>

            {{ $monsters->links() }}

        </div>

    </main>
@endsection
