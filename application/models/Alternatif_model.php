<?php defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif_model extends CI_Model
{
	private $table = "tb_alternatif";

	public $id;
	public $kode;
	public $nama_alternatif;
	public $keterangan;

	public function rules()
	{
		return [
			[
				'field' => 'kode',
				'label' => 'Kode',
				'rules' => 'required'
			],
			[
				'field' => 'nama_alternatif',
				'label' => 'Nama Alternatif',
				'rules' => 'required'
			],
			[
				'field' => 'keterangan',
				'label' => 'Keterangan',
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
		$this->nama_alternatif = $post["nama_alternatif"];
		$this->keterangan = $post["keterangan"];
		return $this->db->insert($this->table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id = $post["id"];
		$this->kode = $post["kode"];
		$this->nama_alternatif = $post["nama_alternatif"];
		$this->keterangan = $post["keterangan"];
		return $this->db->update($this->table, $this, array('id' => $post['id']));
	}

	public function delete($id)
	{
		return $this->db->delete($this->table, array("id" => $id));
	}
}
