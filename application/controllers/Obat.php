<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Obat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Obat | App Obat";
        $data['obat'] = $this->Obat_model->getAllObat();
        // Ganti 'Your_model_name' dengan nama model Anda

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('obat/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = "Tambah Obat | App Obat";
        $data['dist'] = $this->Obat_model->getAllDist();
        $data['kat'] = $this->Obat_model->getAllKat();

        $this->form_validation->set_rules('kode_obat', 'Kode_obat', 'required');
        $this->form_validation->set_rules('id_dist', 'Id_dist', 'required');
        $this->form_validation->set_rules('id_kat', 'Id_kat', 'required');
        $this->form_validation->set_rules('nama_obat', 'Nama_obat', 'required');
        $this->form_validation->set_rules('masa_exfire', 'Masa_exfire', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('obat/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Obat_model->addObat();
            $this->session->set_flashdata('flash', 'DiTambah');
            redirect('obat');
        }
    }

    public function edit($id)
    {
        $data['judul'] = "Edit Obat | App Obat";
        $data['dist'] = $this->Obat_model->getAllDist();
        $data['kat'] = $this->Obat_model->getAllkat();
        $data['obat'] = $this->Obat_model->getObatById($id);

        $this->form_validation->set_rules('kode_obat', 'Kode_obat', 'required');
        $this->form_validation->set_rules('id_dist', 'Id_dist', 'required');
        $this->form_validation->set_rules('id_kat', 'Id_kat', 'required');
        $this->form_validation->set_rules('nama_obat', 'Nama_obat', 'required');
        $this->form_validation->set_rules('masa_exfire', 'Masa_exfire', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('obat/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Obat_model->UpdateObat($id);
            $this->session->set_flashdata('flash', 'DiUpdate');
            redirect('obat');
        }
    }
    public function hapus($id)
    {
        $this->Obat_model->DeleteObat($id);
        $this->session->set_flashdata('flash', 'DiHapus');
        redirect('obat');
    }
}
