<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Machine_model extends CI_Model {

	public function getMachinesByLinephlitId($line_id)
	{
		$this->db->select('machine_id, mechanism_name, mech_name, middle_name');
		$this->db->from('machine');
		$this->db->where('linephlit_id', $line_id);
		$query = $this->db->get();
		return ($query->num_rows() > 0) ? $query->result_array() : false;
	}
}
