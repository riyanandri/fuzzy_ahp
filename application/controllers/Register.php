<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('auth/register');
	}

	public function proses()
	{
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|min_length[1]|max_length[255]|is_unique[tb_user.email]');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run() == true) {
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->auth->register($nama, $email, $password);
			$this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
			redirect('login');
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}
	}
}
