<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('isLogin'))) {
            redirect('login');
        }
        $this->load->model('PasienModel');
    }

    public function index()
    {
        $data['title'] = 'Data Pasien';
        $data['pasien'] = $this->PasienModel->getAll();

        $this->load->view('dashboard/layout/header', $data);
        $this->load->view('dashboard/layout/nav', $data);
        $this->load->view('dashboard/pasien/index', $data);
        $this->load->view('dashboard/layout/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Pasien Baru';

        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->load->view('dashboard/layout/header', $data);
            $this->load->view('dashboard/layout/nav', $data);
            $this->load->view('dashboard/pasien/tambah');
            $this->load->view('dashboard/layout/footer');
        } else {
            $this->proses_tambah();
        }
    }

    public function proses_tambah()
    {
        $data = [
            'nomor_rm' => $this->input->post('nomor_rm'),
            'nama_pasien' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp')
        ];

        $this->PasienModel->insert($data);
        $this->session->set_flashdata('message', '<div class="alert 
        alert-primary" role="alert">Data pasien berhasil ditambahkan.</div>');
        redirect(base_url('pasien'));
    }

    public function ubah($id)
    {
        $data['title'] = 'Ubah Data Pasien';
        $data['pasien'] = $this->PasienModel->getById($id);

        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->load->view('dashboard/layout/header', $data);
            $this->load->view('dashboard/layout/nav', $data);
            $this->load->view('dashboard/pasien/ubah', $data);
            $this->load->view('dashboard/layout/footer');
        } else {
            $this->proses_ubah();
        }
    }

    public function proses_ubah()
    {
        $id = $this->input->post('id_pasien');
        $data = [
            'nomor_rm' => $this->input->post('nomor_rm'),
            'nama_pasien' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp')
        ];

        $this->PasienModel->update($id, $data);
        $this->session->set_flashdata('message', '<div class="alert 
        alert-primary" role="alert">Data pasien berhasil diperbarui.</div>');
        redirect(base_url('pasien'));
    }

    public function hapus($id)
    {
        $this->PasienModel->delete($id);
        $this->session->set_flashdata('message', '<div class="alert 
        alert-primary" role="alert">Data pasien berhasil dihapus.</div>');
        redirect(base_url('pasien'));
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nomor_rm', 'Nomor Rekam Medis', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');

        $this->form_validation->set_message('required', '{field} tidak boleh kosong, silahkan diisi');

        $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
    }
}
