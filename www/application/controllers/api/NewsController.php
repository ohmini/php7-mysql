<?php

use Restserver\Libraries\REST_Controller;

if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the Rest Controller library
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class NewsController extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function line_get()
    {
        $data = array(
            array(
                "id"=>1,
                "topic"=>"หัวข้อข่าวที่ 1"
            ),
            array(
                "id"=>2,
                "topic"=>"หัวข้อข่าวที่ 2"
            ),
            array(
                "id"=>3,
                "topic"=>"หัวข้อข่าวที่ 3"
            ),
        );
        $this->response($data, 200);
    }

    public function line_post()
    {
        //$id = $this->post('title');
        //echo $id;
        //$this->response($data, 200);
        $data = file_get_contents("php://input");
        if($data !== false AND !empty($data)) {
            console($data); 
        }   
    }

}