<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApiLoginRequest;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    use ApiResponse;
    public function login(ApiLoginRequest $request){
        Log::info($request->get('password'));
        return $this->ok('Hello,'. $request->get('email'));
    }
    public function register(){
        return $this->ok('Register',200);
    }
}
