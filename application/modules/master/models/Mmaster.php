<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmaster extends CI_Model
{
	public function roles($params = array('id_role' => null, 'single' => false))
	{
		$this->db->select('*');
		$this->db->from('ph_role');
		if (isset($params['id_role']))
			$this->db->where('id_role', $params['id_role']);
		$query = $this->db->get();
		if (isset($params['single']) && $params['single'])
			return $query->row();
		else
			return $query->result();
	}
	public function disposisi($params = array('id' => null, 'single' => false))
	{
		$this->db->select('*');
		$this->db->from('ph_ms_disposisi');
		if (isset($params['id']))
			$this->db->where('id_disposisi', $params['id']);
		if (isset($params['tipe']))
			$this->db->where('tipe', $params['tipe']);
		$query = $this->db->get();
		if (isset($params['single']) && $params['single'])
			return $query->row();
		else
			return $query->result();
	}
}
