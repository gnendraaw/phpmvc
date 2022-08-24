<?php

class Login extends Controller {
    public function index()
    {
        if(isset($_SESSION['user']))
        {
            header('location: ' . BASE_URL);
            exit;
        }
        $this->view('Login/index');
    }

    public function sign()
    {
        $userData = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        ];

        $user = $this->model('User_model')->getUserViaLogin($userData);

        if($user > 0)
        {
            $_SESSION['user'] = [
                'id' => $user['id_user'],
                'username' => $user['username'],
                'nama' => $user['nama'],
                'email' => $user['email'],
            ];

            header('location: ' . BASE_URL);
            exit;
        }
        header('location: ' . BASE_URL . '/login');
        exit;
    }
}