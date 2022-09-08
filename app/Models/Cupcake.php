<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupcake extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function wrapper()
    {
        return $this->hasOne(Ingredient::class, 'id', 'wrap_id');
    }

    public function cake()
    {
        return $this->hasOne(Ingredient::class, 'id', 'cake_id');
    }

    public function frosting()
    {
        return $this->hasOne(Ingredient::class, 'id', 'frosting_id');
    }

    public function topping()
    {
        return $this->hasOne(Ingredient::class, 'id', 'topping_id');
    } 
}
