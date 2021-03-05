<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
    // controller delle rotte esterne
    public function index() {
        $recipes = Recipe::all();
        return view('guest.recipes.index', compact('recipes'));
    }
}
