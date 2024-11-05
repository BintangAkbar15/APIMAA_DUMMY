<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    function login (Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email',$request->email)->first();

        if(! $user || ! Hash::check($request->password,$user->password)){
            throw ValidationException::withMessages([
                'Error' =>['Kredensial yang diperlukan salah']
            ]);
        }
        
        return $user->createToken("user_token")->plainTextToken;
    }

    function logout(Request $request){
        return $request->user()->currentAccessToken()->delete();
    }
}
