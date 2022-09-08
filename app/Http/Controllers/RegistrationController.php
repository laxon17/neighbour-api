<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class RegistrationController extends Controller
{
    public function store()
    {
        $user = User::create(request()    
            ->validate([
                'email' => ['required', 'email', Rule::unique('users', 'email')],
                'password' => ['required', 'min:6'],
                'name' => ['required', 'min:7'],
                'phone' => ['nullable', Rule::unique('users', 'phone')],
                'birth_date' => ['required', 'date'],
            ]));

        return response()->json([
            'token' => auth()->login($user),
            'user' => auth()->user()
        ]);
    }
}
