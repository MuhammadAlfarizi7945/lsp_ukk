<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_model');
    }

    public function index()
    {
        $data['judul'] = "Laporan | App Laundry";
        $data['laporan'] = $this->Laporan_model->getAllLaporan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }
}
