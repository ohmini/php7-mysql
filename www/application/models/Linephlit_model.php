<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Linephlit_model extends CI_Model {

	public function getLinephlitList()
	{
		$this->db->select('linephlit_id, linephlit_name');
		$this->db->from('linephlit');
		$query = $this->db->get();
		return ($query->num_rows() > 0) ? $query->result_array() : false;
	}

	public function createLinephlit($data)
	{
		$this->db->insert('linephlit', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}
}
