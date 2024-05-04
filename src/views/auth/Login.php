<?php
    
namespace App\views\auth;
use App\models\User;

class Login extends User{
    private $user;
    private $loggedIn = false;

    public function __construct($username, $password) {
        $this->setUsername($username); // Define o username usando o método público da classe User
        $this->setPassword($password); // Define o password usando o método público da classe User
    }

    public function authenticate() {
        $userValidate = $this->user->validateCredentials($this->getUsername(), $this->getPassword());

        if ($userValidate) {
            $this->loggedIn = true;
            return true; // Autenticação bem-sucedida
        } else {
            $this->loggedIn = false;
            return false; // Autenticação falhou
        }
    }

    public function isLoggedIn() {       
        return $this->loggedIn;
    }
}
