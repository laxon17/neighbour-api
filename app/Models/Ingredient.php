<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(IngredientCategory::class, 'ingredient_category_id');
    }

    public function scopeFilter($query, $keyword)
    {
        $query->where('ingredient_category_id', fn($query) => 
            $query->select('id')
                    ->from('ingredient_categories')
                    ->where('name', $keyword)
        );
    }
}
