<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $data['title'] = 'Dashboard';
        $data['rawat_jalan'] = $this->RawatJalanModel->count();
        $data['pasien'] = $this->PasienModel->count();

        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/nav', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('dashboard/layout/footer');
    }
}
