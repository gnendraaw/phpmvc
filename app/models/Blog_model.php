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

    public function deleteBlog($id)
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function createBlog($blogData)
    {
        $query = 'INSERT INTO ' . $this->table . ' VALUES(NULL, :penulis, :judul, :tulisan)';
        $this->db->query($query);
        $this->db->bind('penulis', $blogData['penulis']);
        $this->db->bind('judul', $blogData['judul']);
        $this->db->bind('tulisan', $blogData['tulisan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getBlogById($id)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function updateBlog($blogData, $id)
    {
        $query = 'UPDATE ' . $this->table . ' SET penulis=:penulis, judul=:judul, tulisan=:tulisan WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('penulis', $blogData['penulis']);
        $this->db->bind('id', $id);
        $this->db->bind('judul', $blogData['judul']);
        $this->db->bind('tulisan', $blogData['tulisan']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}