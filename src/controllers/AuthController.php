<?php
namespace App\config;
use App\views\auth\Login;

class AuthController extends Login{
    public function logout() {
        session_start();
        session_destroy();
        return true;
    }

    public function isLoggedIn() {
        session_start();
        return isset($_SESSION['username']);
    }
}