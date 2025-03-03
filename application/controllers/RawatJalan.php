<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RawatJalan extends CI_Controller
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
        $data['title'] = 'Rawat Jalan';
        $data['rawat_jalan'] = $this->RawatJalanModel->getAllToday();

        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/nav', $data);
        $this->load->view('dashboard/rawat-jalan/index', $data);
        $this->load->view('dashboard/layout/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Pendaftaran Rawat Jalan';
        $data['pasien'] = $this->PasienModel->getAll();
        $data['nomor_antrian'] = $this->RawatJalanModel->getNomorAntrian();

        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->load->view('dashboard/layout/header', $data);
            $this->load->view('dashboard/layout/nav', $data);
            $this->load->view('dashboard/rawat-jalan/tambah', $data);
            $this->load->view('dashboard/layout/footer');
        } else {
            $this->proses_tambah();
        }
    }

    public function proses_tambah()
    {
        $data = [
            'id_pasien' => $this->input->post('id_pasien'),
            'keluhan' => $this->input->post('keluhan'),
            'tgl_daftar' => $this->input->post('tgl_daftar'),
            'status' => $this->input->post('status'),
        ];

        $this->RawatJalanModel->insert($data);
        $this->session->set_flashdata('message', '<div class="alert 
        alert-primary" role="alert">Pasien berhasil di daftar.</div>');
        redirect(base_url('rawat-jalan'));
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Data Rawat Jalan';
        $data['pasien'] = $this->PasienModel->getAll();
        $data['pendaftaran'] = $this->RawatJalanModel->getById($id);

        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->load->view('dashboard/layout/header', $data);
            $this->load->view('dashboard/layout/nav', $data);
            $this->load->view('dashboard/rawat-jalan/ubah', $data);
            $this->load->view('dashboard/layout/footer');
        } else {
            $this->proses_ubah();
        }
    }

    public function proses_ubah()
    {
        $id = $this->input->post('id_pendaftaran');
        $data = [
            'id_pasien' => $this->input->post('id_pasien'),
            'keluhan' => $this->input->post('keluhan'),
            'tgl_daftar' => $this->input->post('tgl_daftar'),
            'status' => $this->input->post('status'),
        ];

        $this->RawatJalanModel->update($id, $data);
        $this->session->set_flashdata('message', '<div class="alert 
        alert-primary" role="alert">Data pendaftaran berhasil diperbarui.</div>');
        redirect(base_url('rawat-jalan'));
    }

    public function menunggu($id)
    {
        $this->RawatJalanModel->update($id, ['status' => 'Menunggu']);
        $this->session->set_flashdata('message', '<div class="alert 
        alert-primary" role="alert">Status berhasil diperbarui.</div>');
        redirect(base_url('rawat-jalan'));
    }

    public function diperiksa($id)
    {
        $this->RawatJalanModel->update($id, ['status' => 'Diperiksa']);
        $this->session->set_flashdata('message', '<div class="alert 
        alert-primary" role="alert">Status berhasil diperbarui.</div>');
        redirect(base_url('rawat-jalan'));
    }

    public function selesai($id)
    {
        $this->RawatJalanModel->update($id, ['status' => 'Selesai']);
        $this->session->set_flashdata('message', '<div class="alert 
        alert-primary" role="alert">Status berhasil diperbarui.</div>');
        redirect(base_url('rawat-jalan'));
    }

    public function hapus($id)
    {
        $this->RawatJalanModel->delete($id);
        $this->session->set_flashdata('message', '<div class="alert 
        alert-primary" role="alert">Data pendaftaran berhasil dihapus.</div>');
        redirect(base_url('rawat-jalan'));
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_pasien', 'Pasien', 'required');
        $this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
        $this->form_validation->set_rules('tgl_daftar', 'Tanggal Daftar', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');

        $this->form_validation->set_message('required', '{field} tidak boleh kosong, silahkan diisi');

        $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
    }
}
