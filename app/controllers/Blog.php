<?php

class Blog extends Controller {
    public function index()
    {
        $data['blog'] = $this->model('Blog_model')->getAllBlog();
        $data['title'] = 'Blog';

        $this->view('Templates/header', $data);
        $this->view('Blog/index', $data);
        $this->view('Templates/footer');
    }

    public function delete($id)
    {
        if($this->model('Blog_model')->deleteBlog($id) > 0)
        {
            header('Location: ' . BASE_URL . '/blog');
            exit;
        }
    }

    public function create()
    {
        $blogData = [
            'penulis' => $_POST['penulis'],
            'judul' => $_POST['judul'],
            'tulisan' => $_POST['tulisan'],
        ];

        if($this->model('Blog_model')->createBlog($blogData) > 0)
        {
            header('Location: ' . BASE_URL . '/blog');
            exit;
        }
        else 
        {
            header('Location: ' . BASE_URL . '/blog');
            exit;
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Blog';

        $data['blog'] = $this->model('Blog_model')->getBlogById($id);

        $this->view('Templates/header', $data);
        $this->view('Blog/edit', $data);
        $this->view('Templates/footer');
    }

    public function update($id)
    {
        $blogData = [
            'penulis' => $_POST['penulis'],
            'judul' => $_POST['judul'],
            'tulisan' => $_POST['tulisan'],
        ];

        if($this->model('Blog_model')->updateBlog($blogData, $id) > 0)
        {
            header('Location: ' . BASE_URL . '/blog');
            exit;
        }
        else
        {
            header('Location: ' . BASE_URL . '/blog/edit/' . $id);
            exit;
        }
    }
}