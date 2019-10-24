<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Worksheet_model extends CI_Model {

        public function getWorksheetList()
		{
			$sql =	'SELECT ref_no, document_no, product_ref_no, customer, production_category, deadline, product_description, approve_by_r_and_d ' .
					'FROM tbl_product_sample_work_sheet';
			$query = $this->db->query($sql);
			return ($query->num_rows() > 0) ? $query->result_array() : false;
		}

		public function searchWorksheetsByName($name) {
			$sql = 	'SELECT ref_no, document_no, product_ref_no, customer, production_category, deadline, product_description, approve_by_r_and_d ' .
					'FROM tbl_product_sample_work_sheet ' .
					'WHERE customer LIKE \'%' . $name . '%\'';

			$query = $this->db->query($sql);
			return ($query->num_rows() > 0) ? $query->result_array() : false;
		}

        public function createWorksheet($data)
        {
        		$this->db->insert('tbl_product_sample_work_sheet', $data);
				return ($this->db->affected_rows() != 1) ? false : $insert_id = $this->db->insert_id();
        }

        public function updateWorksheetDetail($data, $worksheet_id)
		{
			$this->db->set($data);
			$this->db->where('id', $worksheet_id);
			$this->db->update('tbl_product_sample_work_sheet');
			return ($this->db->affected_rows() != 1) ? false : true;
		}

		public function searchLinesByName($text)
		{
			$this->db->select('linephlit_id, linephlit_name');
			$this->db->from('linephlit');
			if ($text) {
				$this->db->like('linephlit_name', $text);
			}
			$query = $this->db->get();
			return ($query->num_rows() > 0) ? $query->result_array(): false;
		}

		public function duplicateProductSample($id)
		{
			try {
				$this->db->trans_start(FALSE);
				/* $sql = 	'INSERT INTO tbl_product_sample_work_sheet(document_no, product_ref_no, customer, production_category, deadline, product_description, step, linephlit_id, machine_id, meet_minute) ' .
					'SELECT document_no, product_ref_no, customer, production_category, deadline, product_description, step, linephlit_id, machine_id, meet_minute ' .
					'FROM tbl_product_sample_work_sheet WHERE id = ' . $id; */
				// $this->db->query($sql);

				$sql = 'SELECT document_no, product_ref_no, customer, production_category, deadline, product_description, step, linephlit_id, JSON_EXTRACT(machine_id, "$.key1"), meet_minute ' .
					'FROM tbl_product_sample_work_sheet WHERE id = ' . $id;
				$query = $this->db->query($sql);

				if ($query->num_rows() > 0) {
					return $query->row(1);
				}

				//$this->db->insert()
				//$insert_id = $this->db->insert_id();
				//$this->db->trans_complete();

				$db_error = $this->db->error();
				if (!empty($db_error)) {
					throw new Exception("Database error! [" . $db_error['code'] . "]");
				}

				//return $insert_id;

			} catch (Exception $e) {
				return $e;
			}
		}

}
