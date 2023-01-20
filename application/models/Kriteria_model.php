<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria_model extends CI_Model
{
	private $table = "tb_kriteria";

	public $id;
	public $kode;
	public $nama_kriteria;

	public function rules()
	{
		return [
			[
				'field' => 'kode',
				'label' => 'Kode',
				'rules' => 'required'
			],
			[
				'field' => 'nama_kriteria',
				'label' => 'Nama Kriteria',
				'rules' => 'required'
			]
		];
	}

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->table, ["id" => $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id = uniqid();
		$this->kode = $post["kode"];
		$this->nama_kriteria = $post["nama_kriteria"];
		return $this->db->insert($this->table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id = $post["id"];
		$this->kode = $post["kode"];
		$this->nama_kriteria = $post["nama_kriteria"];
		return $this->db->update($this->table, $this, array('id' => $post['id']));
	}

	public function delete($id)
	{
		return $this->db->delete($this->table, array("id" => $id));
	}
}
