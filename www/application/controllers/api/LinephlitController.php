<?php

use Restserver\Libraries\REST_Controller;

if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the Rest Controller library
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class LinephlitController extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('linephlit_model');
    }

	/**
	 * @api {get} /linephlits
	 * @apiName GetLinephlitList
	 * @apiSuccess {string} linephlit_id
	 * @apiSuccess {string} linephlit_name
	 * @apiGroup linephlit
	 * @apiDescription Get linephlit list
	 */
    public function linephlits_get()
    {
        $result = $this->linephlit_model->getLinephlitList();
        if ($result) {
			$this->response($result, REST_Controller::HTTP_OK);
        } else {
			$this->response("Found item not found", REST_Controller::HTTP_NOT_FOUND);
        }    
    }

	/**
	 * @api {post} /linephlits
	 * @apiName CreateLinephlit
	 * @apiParam {Object} data
	 * @apiGroup linephlit
	 */
    public function linephlits_post()
    {
        $data = file_get_contents("php://input");
        if($data !== false AND !empty($data)) {
            $data = (array)(json_decode($data));   
            $result = $this->linephlit_model->createLinephlit($data);
            if ($result) {
                $this->response($result, REST_Controller::HTTP_CREATED);
            } else {
            	$this->response("Found item not found", REST_Controller::HTTP_NOT_FOUND);
            }  
        }   
    }

	public function searchLineProductDetailsByName($name)
	{
		$sql = 	'SELECT linephlit_id, product_detail ' .
			'FROM linephlit ' .
			'WHERE JSON_EXTRACT(product_detail, "$.name") = "'. $name . '" ';

		$query = $this->db->query($sql);
		return ($query->num_rows() > 0) ? $query->result_array(): false;
	}
}
