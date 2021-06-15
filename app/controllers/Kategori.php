<?php

class kategori extends Controller
{

    public function cari()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Perpustakaan UNEJ | Librarin ';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['hasil_buku'] = $this->model('Barang_model')->cari($_POST);
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Perpustakaan UNEJ | Librarin ';
            $data['hasil_buku'] = $this->model('Barang_model')->cari($_POST);
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }

    public function ilmiah()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Perpustakaan UNEJ | Librarin ';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['hasil_buku'] = $this->model('Barang_model')->getIlmiah();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Perpustakaan UNEJ | Librarin ';
            $data['hasil_buku'] = $this->model('Barang_model')->getIlmiah();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }

    public function asing()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Perpustakaan UNEJ | Librarin ';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['hasil_buku'] = $this->model('Barang_model')->getAsing();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Perpustakaan UNEJ | Librarin ';
            $data['hasil_buku'] = $this->model('Barang_model')->getAsing();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }

    public function campuran()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Perpustakaan UNEJ | Librarin ';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['hasil_buku'] = $this->model('Barang_model')->getCampuran();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Perpustakaan UNEJ | Librarin ';
            $data['hasil_buku'] = $this->model('Barang_model')->getCampuran();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }
}