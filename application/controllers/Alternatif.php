<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Alternatif_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["alternatif"] = $this->Alternatif_model->getAll();
		$this->load->view("alternatif/index", $data);
	}

	public function add()
	{
		$this->load->view("alternatif/create");
		$alternatif = $this->Alternatif_model;
		$validation = $this->form_validation;
		$validation->set_rules($alternatif->rules());

		if ($validation->run()) {
			$alternatif->save();
			$this->session->set_flashdata('success', 'Data alternatif berhasil disimpan');
			return redirect(site_url('alternatif'));
		}
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('alternatif/index');

		$alternatif = $this->Alternatif_model;
		$validation = $this->form_validation;
		$validation->set_rules($alternatif->rules());

		if ($validation->run()) {
			$alternatif->update();
			$this->session->set_flashdata('success', 'Data alternatif berhasil diupdate');
			return redirect(site_url('alternatif'));
		}

		$data["alternatif"] = $alternatif->getById($id);
		if (!$data["alternatif"]) show_404();

		$this->load->view("alternatif/edit", $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->Alternatif_model->delete($id)) {
			$this->session->set_flashdata('success', 'Data alternatif berhasil dihapus');
			redirect(site_url('alternatif/index'));
		}
	}
}
