<?php

class Register extends Controller {
    public function index()
    {
        $this->view('Register/index');
    }

    public function sign()
    {
        $userData = [
            'username' => $_POST['username'],
            'nama' => $_POST['nama'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'cpassword' => $_POST['cpassword'],
        ];

        // if password not match with confirm password
        if($userData['password'] != $userData['cpassword'])
        {
            // stay on register page
            header('location: ' . BASE_URL . '/register');
            exit;
        }

        // encrypt password
        $userData['password'] = md5($userData['password']);
        // $salt = $this->salt(16);
        // $userData['password'] .= $salt;

        // if userdata successfuly created
        if($this->model('User_model')->addUser($userData) > 0)
        {
            // move to login page
            header('location: ' . BASE_URL . '/login');
            exit;
        }
        header('location: ' . BASE_URL . '/register');
        exit;
    }
}