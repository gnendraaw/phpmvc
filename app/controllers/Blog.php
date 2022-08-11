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
}