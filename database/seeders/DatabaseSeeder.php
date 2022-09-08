<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cupcake;
use App\Models\Ingredient;
use App\Models\IngredientCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        IngredientCategory::truncate();
        Ingredient::truncate();
        Cupcake::truncate();

        Cupcake::factory(5)->create();

        User::create([
            'name' => 'Lazar Lalovic',
            'email' => 'laxon@example.com',
            'password' => 'laxonche',
            'birth_date' => '2000-02-17'
        ]);

        IngredientCategory::create([
            'name' => 'Wrapper'
        ]);
        IngredientCategory::create([
            'name' => 'Cake'
        ]);
        IngredientCategory::create([
            'name' => 'Frosting'
        ]);
        IngredientCategory::create([
            'name' => 'Topping'
        ]);

        Ingredient::factory(15)->create();
    }
}
