<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model
{
	public function user($params = array('id_user' => null, 'single' => false))
	{
		$this->db->select('*');
		$this->db->from('ph_user');

		if (isset($params['username'])) {
			$this->db->where('username', $params['username']);
		}
		if (isset($params['passowrd'])) {
			$this->db->where('passowrd', md5($params['passowrd']));
		}

		$query = $this->db->get();

		if(isset($params['single']) && $params['single'])
			return $query->row();
		else
			return $query->result();
	}
}
