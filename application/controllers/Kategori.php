<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "kategori | App Apotek";
        $data['kategori'] = $this->Kategori_model->getAllKategori();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = "Tambah kategori | App Apotek";

        $this->form_validation->set_rules('nama_kat', 'Nama_kat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kategori_model->addKat();
            $this->session->set_flashdata('flash', 'Di Tambah');
            redirect('kategori');
        }
    }

    public function edit($id)
    {
        $data['judul'] = "Edit kategori | App Apotek";
        $data['kat'] = $this->Kategori_model->getKatById($id);

        $this->form_validation->set_rules('nama_kat', 'Nama_kat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('kategori/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Kategori_model->UpdateKat($id);
            $this->session->set_flashdata('flash', 'Di Update');
            redirect('kategori');
        }
    }
    public function hapus($id)
    {
        $this->Kategori_model->DeleteKat($id);
        $this->session->set_flashdata('flash', 'Di Hapus');
        redirect('kategori');
    }
}
