<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\SavedRecipe;

class RecipeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function search(Request $request) {
        $query = $request->input('q');
        $response = Http::get("https://www.themealdb.com/api/json/v1/1/search.php?s=" . urlencode($query));
        $meals = $response->json()['meals'] ?? [];
        return view('search', compact('meals'));
    }

    public function save(Request $request) {
        $exists = SavedRecipe::where('recipe_id', $request->recipe_id)->exists();

        if ($exists) {
            return response()->json(['status' => 'error', 'message' => 'Recipe already saved.'], 409);
        }

        SavedRecipe::create($request->only('recipe_id', 'title', 'image_url'));
        return response()->json(['status' => 'success', 'message' => 'Recipe saved successfully!']);
    }

    public function saved() {
        $recipes = SavedRecipe::all();
        return view('saved', compact('recipes'));
    }
}
