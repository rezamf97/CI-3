<?php

class Home extends CI_Controller
{
    public function index($nama = 'wbn')
    {
        $data['judul'] = 'Halaman Utama';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
