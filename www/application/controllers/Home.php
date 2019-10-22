<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

    function __construct() {
		parent::__construct();
		$this->load->model('home_model');
    }

    public function index()
	{
		$result = $this->home_model->getData();
		console($result);
	}

	

	

	
}
