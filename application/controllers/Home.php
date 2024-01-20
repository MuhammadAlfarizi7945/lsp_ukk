<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['judul'] = "Home | App Apotik";
        $data['dist'] = $this->Home_model->jumlahDist();
        $data['kat'] = $this->Home_model->jumlahKat();
        $data['obat'] = $this->Home_model->jumlahObat();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
