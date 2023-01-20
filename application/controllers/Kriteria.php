<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kriteria_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["kriteria"] = $this->Kriteria_model->getAll();
		$this->load->view("kriteria/index", $data);
	}

	public function add()
	{
		$this->load->view("kriteria/create");
		$kriteria = $this->Kriteria_model;
		$validation = $this->form_validation;
		$validation->set_rules($kriteria->rules());

		if ($validation->run()) {
			$kriteria->save();
			$this->session->set_flashdata('success', 'Data kriteria berhasil disimpan');
			return redirect(site_url('kriteria'));
		}
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('kriteria/index');

		$kriteria = $this->Kriteria_model;
		$validation = $this->form_validation;
		$validation->set_rules($kriteria->rules());

		if ($validation->run()) {
			$kriteria->update();
			$this->session->set_flashdata('success', 'Data kriteria berhasil diupdate');
			return redirect(site_url('kriteria'));
		}

		$data["kriteria"] = $kriteria->getById($id);
		if (!$data["kriteria"]) show_404();

		$this->load->view("kriteria/edit", $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->Kriteria_model->delete($id)) {
			$this->session->set_flashdata('success', 'Data kriteria berhasil dihapus');
			redirect(site_url('kriteria/index'));
		}
	}
}
