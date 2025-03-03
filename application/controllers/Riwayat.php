<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('isLogin'))) {
            redirect('login');
        }

        $this->load->model('RawatJalanModel');
        $this->load->model('PasienModel');
    }

    public function index()
    {
        $data['title'] = 'Riwayat Rawat Jalan';
        $data['rawat_jalan'] = $this->RawatJalanModel->getAll();

        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/nav', $data);
        $this->load->view('dashboard/riwayat/index', $data);
        $this->load->view('dashboard/layout/footer');
    }
}
