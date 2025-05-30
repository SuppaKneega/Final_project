@extends('layout.app')

@section('content')
<h2>Search Results</h2>
<a href="/">← Back to Home</a><br><br>

@if(count($meals) > 0)
    @foreach($meals as $meal)
        <div style="margin-bottom: 20px;">
            <h3>{{ $meal['strMeal'] }}</h3>
            <img src="{{ $meal['strMealThumb'] }}" width="250">
            <form class="save-form" method="POST" data-id="{{ $meal['idMeal'] }}">
                @csrf
                <input type="hidden" name="recipe_id" value="{{ $meal['idMeal'] }}">
                <input type="hidden" name="title" value="{{ $meal['strMeal'] }}">
                <input type="hidden" name="image_url" value="{{ $meal['strMealThumb'] }}">
                <br>
                <button class="button" type="submit">Save</button>
            </form>
        </div>
    @endforeach
@else
    <p>No recipes found.</p>
@endif
@endsection
