<?php

namespace App\Http\Controllers;

class SessionController extends Controller
{
    public function store()
    {
        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(! $token = auth('api')->attempt($credentials)) 
        {
            return response()->json([
                'error' => 'Couldn\'t verify given credentials.'
            ], 401);
        }
   
        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'token' => $token,
            'user' => auth()->user()
        ]);
    }
}
