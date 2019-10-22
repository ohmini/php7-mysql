<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Worksheet_model extends CI_Model {

        public function getLineList()
        {
                $this->db->select('linephlit_id,linephlit_name');
		        $this->db->from('linephlit');
		        $query = $this->db->get();
		        return ($query->num_rows() > 0) ? $query->result_array() : false;
        }

		public function insertLine($data)
		{
				$this->db->insert('linephlit', $data);
				return ($this->db->affected_rows() != 1) ? false : true;
		}

		public function getMachineList($line_id)
        {
                $this->db->select('machine_id,mechanism_name,mech_name,middle_name');
		        $this->db->from('machine');
		        $this->db->where('linephlit_id',$line_id);
		        $query = $this->db->get();
		        return ($query->num_rows() > 0) ? $query->result_array() : false;
        }

        public function createWorksheet($data)
        {
        		$this->db->insert('tbl_product_sample_work_sheet', $data);
				return ($this->db->affected_rows() != 1) ? false : $insert_id = $this->db->insert_id();
        }

        public function updateWorksheetDetail($data,$worksheet_id)
		{
			$this->db->set($data);
			$this->db->where('id', $worksheet_id);
			$this->db->update('tbl_product_sample_work_sheet');
			return ($this->db->affected_rows() != 1) ? false : true;
		}

		public function searchLine($text)
		{
			$this->db->select('linephlit_id, linephlit_name');
			$this->db->from('linephlit');
			if ($text) {
				$this->db->like('linephlit_name', $text);
			}
			$query = $this->db->get();
			return ($query->num_rows() > 0) ? $query->result_array(): false;
		}
}
