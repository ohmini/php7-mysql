<?php

use Restserver\Libraries\REST_Controller;

if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the Rest Controller library
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class MachineController extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('machine_model');
    }

	/**
	 * @api {get} /machine
	 * @apiName GetMachinesByLinephlitId
	 * @apiGroup machine
	 * @apiDescription Get machine list
	 */
	public function machinesByLinephlitId_get($line_id)
	{
		$result = $this->machine_model->getMachinesByLinephlitId($line_id);
		if ($result) {
			$this->response($result, REST_Controller::HTTP_OK);
		} else {
			$this->response("Found item not found", REST_Controller::HTTP_NOT_FOUND);
		}
	}
}
