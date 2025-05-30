@extends('layout.app')

@section('content')
<h2>Saved Recipes</h2>
<a href="/">← Back to Home</a><br><br>

@if(count($recipes) > 0)
    @foreach($recipes as $recipe)
        <div style="margin-bottom: 20px;">
            <h3>{{ $recipe->title }}</h3>
            <img src="{{ $recipe->image_url }}" width="250">
        </div>
    @endforeach
@else
    <p>No saved recipes yet.</p>
@endif
@endsection
