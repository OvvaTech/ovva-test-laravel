<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private AuthService $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

    public function register(RegisterRequest $request)
    {
        $request->validated();

        $this->authService->register($request);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        $data = $this->authService->login($credentials);

        return response()->json([
            'data' => $data
        ]);
    }

    public function logout()
    {
        $this->authService->logout();
    }
}
