<?php

class User_model {
    private $nama = 'Alex';
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser()
    {
        return $this->nama;
    }

    public function addUser($userData)
    {
        $query = 'INSERT INTO ' . $this->table . ' VALUES(NULL, :username, :nama, :email, :password)';
        $this->db->query($query);
        $this->db->bind('username', $userData['username']);
        $this->db->bind('nama', $userData['nama']);
        $this->db->bind('email', $userData['email']);
        $this->db->bind('password', $userData['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getUserById($id)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id_user=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getAllUser()
    {
        $query = 'SELECT * FROM ' . $this->table;
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getUserViaLogin($userData)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE username=:username AND password=:password';
        $this->db->query($query);
        $this->db->bind('username', $userData['username']);
        $this->db->bind('password', $userData['password']);

        return $this->db->single();
    }
}