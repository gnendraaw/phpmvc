<?php 

class Home extends Controller{
    // public function index()
    // {
    //     $data['title'] = 'Home';

    //     $this->view('templates/header', $data);
    //     $this->view('home/index');
    //     $this->view('templates/footer');
    // }

    public function index()
    {
        $data['title'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('Templates/header', $data);
        $this->view('Home/index', $data);
        $this->view('Templates/footer');
    }

    public function halo($nama='ryan', $pekerjaan='programmer')
    {
        $data['title'] = 'Halo';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;

        $this->view('Templates/header');
        $this->view('home/halo', $data);
        $this->view('Templates/footer');
    }
}