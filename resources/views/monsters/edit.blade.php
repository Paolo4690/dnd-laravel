@extends('template.base')
@section('name', 'Modifica Mostro')

@section('main')
    <main class="container">
        <form action="{{ route('monsters.update', $monster->index) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">

                <label for="index">Index: </label>
                <input type="text" class="form-control" id="index" name="index" value="{{ old('index', $monster->index) }}" placeholder="Index">
                @error('index')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="name">Name: </label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $monster->name ) }}" placeholder="Nome">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="type">Type: </label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type', $monster->type) }}" placeholder="Tipo">
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="alignment">Alignment: </label>
                <input type="text" class="form-control" id="alignment" name="alignment" value="{{ old('alignment', $monster->alignment) }}" placeholder="Alignment">
                @error('alignment')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="size">Size: </label>
                <input type="text" class="form-control" id="size" name="size" value="{{ old('size', $monster->size) }}" placeholder="Size">
                @error('size')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="hit_dice">Hit Dice: </label>
                <input type="text" class="form-control" id="hit_dice" name="hit_dice" value="{{ old('hit_dice', $monster->hit_dice) }}" placeholder="Hit Dice">
                @error('hit_dice')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="languages">Languages: </label>
                <input type="text" class="form-control" id="languages" name="languages" value="{{ old('languages', $monster->languages) }}" placeholder="languages">
                @error('languages')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="armor_class">Armor Class: </label>
                <input type="number" class="form-control" id="armor_class" name="armor_class" value="{{ old('armor_class', $monster->armor_class) }}" placeholder="Armor Class">
                @error('armor_class')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="hit_points">Hit points: </label>
                <input type="number" class="form-control" id="hit_points" name="hit_points" value="{{ old('hit_points', $monster->hit_points) }}" placeholder="hit_points">
                @error('hit_points')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="strength">Strength: </label>
                <input type="number" class="form-control" id="strength" name="strength" value="{{ old('strength', $monster->strength) }}" placeholder="strength">
                @error('strength')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="dexterity">Dexterity: </label>
                <input type="number" class="form-control" id="dexterity" name="dexterity" value="{{ old('dexterity', $monster->dexterity) }}" placeholder="dexterity">
                @error('dexterity')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="constitution">Constitution: </label>
                <input type="number" class="form-control" id="constitution" name="constitution" value="{{ old('constitution', $monster->constitution) }}" placeholder="constitution">
                @error('constitution')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="intelligence">Intelligence: </label>
                <input type="number" class="form-control" id="intelligence" name="intelligence" value="{{ old('intelligence',$monster->intelligence) }}" placeholder="intelligence">
                @error('intelligence')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="wisdom">Wisdom: </label>
                <input type="number" class="form-control" id="wisdom" name="wisdom" value="{{ old('wisdom', $monster->wisdom) }}" placeholder="wisdom">
                @error('wisdom')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="charisma">Charisma: </label>
                <input type="number" class="form-control" id="charisma" name="charisma" value="{{ old('charisma', $monster->charisma) }}" placeholder="charisma">
                @error('charisma')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="xp">Xp: </label>
                <input type="number" class="form-control" id="xp" name="xp" value="{{ old('xp', $monster->xp) }}" placeholder="xp">
                @error('xp')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="challenge_rating">Challenge rating: </label>
                <input type="number" class="form-control" id="challenge_rating" name="challenge_rating" value="{{ old('challenge_rating', $monster->challenge_rating) }}" placeholder="challenge_rating">
                @error('challenge_rating')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </main>

@endsection


