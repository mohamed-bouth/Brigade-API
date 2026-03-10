<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function user(Request $request){
        $user = $request->user();

        return response()->json([
            'user' => $user
        ]);
    }
}
