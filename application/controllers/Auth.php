<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index()
	{
		if ($this->session->userdata('isLogin')) {
			redirect(base_url());
		}

		$data['title'] = 'Masuk';

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_message('required', '{field} tidak boleh kosong, silahkan diisi');
		$this->form_validation->set_message('valid_email', 'Format email tidak sesuai');
		$this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login', $data);
		} else {
			$this->proses_login();
		}
	}

	public function proses_login()
	{
		$email = $this->input->post('email');

		if ($this->UserModel->validateUser($email)->num_rows() == 1) {
			$password = $this->input->post('password');
			$userCheck = $this->UserModel->validateUser($email)->row();

			// if (password_verify($password, $userCheck->password)) {
			if (md5($password) === $userCheck->password) {
				$data = [
					'id' => $userCheck->id,
					'name' => $userCheck->name,
					'email' => $userCheck->email,
					'isLogin' => true,
				];

				$this->session->set_userdata($data);
				redirect(base_url(), 'refresh');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah.</div>');
				redirect(base_url('login'));
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun tidak ditemukan.</div>');
			redirect(base_url('login'), 'refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'), 'refresh');
	}
}
