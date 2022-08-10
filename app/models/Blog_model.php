<?php

class Blog_model {
    private $table = 'blog';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBlog()
    {
        $query = 'SELECT * FROM ' . $this->table;
        $this->db->query($query);
        return $this->db->resultSet();
    }
}