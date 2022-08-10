<?php 

class Mahasiswa extends Controller {
    public function index()
    {
        $data['title'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();

        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Mahasiswa Detail';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);

        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0)
        {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        }
        else
        {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0)
        {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        }
        else 
        {
            Flasher::setFlash('Berhasil', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/mahasiswa');
            exit;
        }
    }

    public function cari()
    {
        $data['title'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->findDataMahasiswa();

        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}