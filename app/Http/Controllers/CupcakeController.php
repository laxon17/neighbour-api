<?php

namespace App\Http\Controllers;

use App\Models\Cupcake;
use Illuminate\Http\Request;

class CupcakeController extends Controller
{
    public function index($user)
    {
        return Cupcake::with(['wrapper', 'cake', 'frosting', 'topping'])
                        ->where('user_id', $user)
                        ->get();
    }

    public function store() 
    {
        Cupcake::create([
            'user_id' => request('user_id'),
            'wrap_id' => request('wrap_id'),
            'cake_id' => request('cake_id'),
            'frosting_id' => request('frosting_id'),
            'topping_id' => request('topping_id')
        ]);

        return response()->json([
            'success' => 'Cupcake created successfully!'
        ], 200);
    }
}
