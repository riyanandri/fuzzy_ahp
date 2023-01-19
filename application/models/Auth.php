<?php
class Auth extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	function register($nama, $email, $password)
	{
		$data_user = array(
			'nama' => $nama,
			'email' => $email,
			'password' => password_hash($password, PASSWORD_DEFAULT),
		);
		$this->db->insert('tb_user', $data_user);
	}

	function login_user($email, $password)
	{
		$query = $this->db->get_where('tb_user', array('email' => $email));
		if ($query->num_rows() > 0) {
			$data_user = $query->row();
			if (password_verify($password, $data_user->password)) {
				$this->session->set_userdata('email', $email);
				$this->session->set_userdata('nama', $data_user->nama);
				$this->session->set_userdata('is_login', TRUE);
				return TRUE;
			} else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	}

	function cek_login()
	{
		if (empty($this->session->userdata('is_login'))) {
			redirect('login');
		}
	}
}
