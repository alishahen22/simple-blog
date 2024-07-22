<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Api\LoginRequest;
use App\Http\Requests\Api\RegisterRequest;
use App\Http\Controllers\API\Traits\ApiResponseTrait;
{

}


class UserController extends Controller
{

    use ApiResponseTrait;


    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $user = User::create($data);

        return $this->ApiResponse(new UserResource($user), __('User created successfully'), 201);
    }

    // Login User
    public function login(LoginRequest $request)
    {


        $credentials = $request->validated();

        // Attempt to authenticate the user with the provided credentials
        if (Auth::attempt($credentials)) {

            $user = Auth::user();
            $token = $user->createToken('authToken')->plainTextToken;

            // Return a successful response with the user data and the token
            return $this->ApiResponse([
                'user' => new UserResource($user),
                'token' => $token
                ],
                 __('logged in successfully') , 200);
        }

        // If authentication fails, return an error response
        return $this->ApiResponse(null, __('Login data is incorrect'), 422);
    }

    // Logout User
    public function logout(Request $request)
    {
        // delete the token
        $request->user()->currentAccessToken()->delete();

        return $this->ApiResponse(null, __('logged out successfully') , 200);
    }

    // Get User Data
    public function getUser()
    {
        return $this->ApiResponse(new UserResource( Auth::user()));
    }
}
