<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Api\LoginUserRequest;

class AuthController extends Controller
{
    use ApiResponse;

    public function login(LoginUserRequest $request){
        $request->validated($request->all());

        if(!Auth::attempt($request->only('email','password'))){
            return $this->error('Invalid email or password',401);
        }

        $user =User::firstWhere('email',$request->email);

        return $this->ok('Authenticated',[
            'token' => $user->createToken('authToken for => '.$user->email,['*'],now()->addMonth())->plainTextToken,
        ]);
    }
    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return $this->ok("see you later",565);
    }
}
