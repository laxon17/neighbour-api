<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;


class IngredientController extends Controller
{
    public function index()
    {
        return [
            'wrapper' => Ingredient::latest()->filter('Wrapper')->get(),
            'cake' => Ingredient::latest()->filter('Cake')->get(),
            'frosting' => Ingredient::latest()->filter('Frosting')->get(),
            'topping' => Ingredient::latest()->filter('Topping')->get(),
        ];   
    }
}
