<?php


class Makanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Load model
        $this->load->model('Makanan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Makanan';
        $data['makanan'] = $this->Makanan_model->getAllMakanan();

        // fitur pencarian
        if ($this->input->post('keyword')) {
            $data['makanan'] = $this->Makanan_model->cariDataMakanan();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('makanan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Makanan';

        // rules
        $this->form_validation->set_rules('namamakanan', 'Nama Makanan', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('komposisi', 'Komposisi', 'required');

        // validasi oleh CI
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('makanan/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Makanan_model->tambahDataMakanan();
            $this->session->set_flashdata('flash', 'Ditambahkan');

            redirect('makanan');
        }
    }

    public function hapus($id)
    {
        $this->Makanan_model->hapusDataMakanan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('makanan');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Daftar Makanan';
        $data['makanan'] = $this->Makanan_model->getMakananById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('makanan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Makanan';
        $data['makanan'] = $this->Makanan_model->getMakananById($id);

        // rules
        $this->form_validation->set_rules('namamakanan', 'Nama Makanan', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('komposisi', 'Komposisi', 'required');

        // validasi oleh CI
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('makanan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Makanan_model->ubahDataMakanan();
            $this->session->set_flashdata('flash', 'Diubah');

            redirect('makanan');
        }
    }
}
