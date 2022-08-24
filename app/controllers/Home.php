<?php 

class Home extends Controller{
    public function index()
    {
        $data['title'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('Templates/header', $data);
        $this->view('Home/index', $data);
        $this->view('Templates/footer');
    }
}