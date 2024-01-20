<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Distributor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Distributor_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Distributor | App Apotek";
        $data['dist'] = $this->Distributor_model->getAllDistributor();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('distributor/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = "Tambah Distributor | App Apotek";

        $this->form_validation->set_rules('nama_dist', 'Nama_dist', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No_telp', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('Distributor/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Distributor_model->addDistributor();
            $this->session->set_flashdata('flash', 'Di Tambah');
            redirect('distributor');
        }
    }

    public function edit($id)
    {
        $data['judul'] = "Edit Distributor | App Apotek";
        $data['dist'] = $this->Distributor_model->getUserById($id);

        $this->form_validation->set_rules('nama_dist', 'Nama_dist', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No_telp', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('distributor/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Distributor_model->UpdateDist($id);
            $this->session->set_flashdata('flash', 'Di Update');
            redirect('distributor');
        }
    }
    public function hapus($id)
    {
        $this->Distributor_model->DeleteDist($id);
        $this->session->set_flashdata('flash', 'Di Hapus');
        redirect('distributor');
    }
}
