<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msurat extends CI_Model
{
	public function surat_masuk($params = array('id' => null, 'single' => false))
	{
		$this->db->select('*');
		$this->db->from('ph_surat_masuk');
		if(isset($params['id']))
			$this->db->where('id_surat', $params['id']);
		$query = $this->db->get();
		if(isset($params['single']) && $params['single'])
			return $query->row();
		else
			return $query->result();
	}
}
