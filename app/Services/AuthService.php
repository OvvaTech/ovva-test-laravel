<?php

namespace App\Services;

use App\Repositories\AuthRepository;

class AuthService
{
    private AuthRepository $authRepository;

    public function __construct()
    {
        $this->authRepository = new AuthRepository();
    }

    public function register($request)
    {
        $this->authRepository->register($request);
    }

    public function login($credentials)
    {
        $this->authRepository->login($credentials);
    }
}
