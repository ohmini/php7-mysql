<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

        public function getData()
        {
                $query = $this->db->query("
                        SELECT *
                        FROM log_user 
                        ;");
                $object = $query->result_array();

                return $object;
        }
        

        

        

        

}