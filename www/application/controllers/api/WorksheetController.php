<?php

use Restserver\Libraries\REST_Controller;

if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the Rest Controller library
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class WorksheetController extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('worksheet_model');
    }
    
    public function lineList_get()
    {
        $result = $this->worksheet_model->getLineList();
        if ($result) {
                $this->response($result, REST_Controller::HTTP_OK);
        } else {
                $this->response("Found item not found", REST_Controller::HTTP_NOT_FOUND);
        }    
    }

    public function lineList_post()
    {
        $data = file_get_contents("php://input");
        if($data !== false AND !empty($data)) {
            $data = (array)(json_decode($data));   
            $result = $this->worksheet_model->insertLine($data); 
            if ($result) {
                $this->response($result, REST_Controller::HTTP_OK);
            } else {
                    $this->response("Found item not found", REST_Controller::HTTP_NOT_FOUND);
            }  
        }   
    }

    public function searchLineProductDetailsByName_get($name)
	{
		$result = $this->worksheet_model->searchLineProductDetailsByName($name);
		foreach ($result as &$value) {
			$value['product_detail'] = json_decode($value['product_detail']);
		}
		if($result) {
			$this->response($result, REST_Controller::HTTP_OK);
		} else {
			$this->response("item not found", REST_Controller::HTTP_NOT_FOUND);
		}
	}

    public function searchLinesByName_get($text)
	{
		$result = $this->worksheet_model->searchLinesByName($text);
		if($result) {
			$this->response($result, REST_Controller::HTTP_OK);
		} else {
			$this->response("item not found", REST_Controller::HTTP_NOT_FOUND);
		}
	}

    public function machineList_get($line_id)
    {
        $result = $this->worksheet_model->getMachineList($line_id);
        if ($result) {
                $this->response($result, REST_Controller::HTTP_OK);
        } else {
                $this->response("Found item not found", REST_Controller::HTTP_NOT_FOUND);
        }    
    }

    public function uploadFile_post()
    {
        if(isset($_FILES)&&($_FILES['upload']["error"] == 0))
        {
            $thumbnail = upload_pic($_FILES,'upload','images');
            $this->response($thumbnail, REST_Controller::HTTP_OK);
        }else $this->response("Can't upload Imaage", REST_Controller::HTTP_NOT_FOUND);
    }

    public function worksheet_post()
    {
        $data = file_get_contents("php://input");
        if($data !== false AND !empty($data)) {
            $data = (array)(json_decode($data));  
            $data['machine_id'] = json_encode($data['machine_id']);
            $result = $this->worksheet_model->createWorksheet($data); 
            if ($result) {
                    $this->response($result, REST_Controller::HTTP_OK);
            } else {
                    $this->response("Can't create worksheet", REST_Controller::HTTP_NOT_FOUND);
            }
        } 
    }

    public function worksheetDetail_put($worksheet_id)
    {
        $data = file_get_contents("php://input");
        if($data !== false AND !empty($data)) {
            $data = (array)(json_decode($data)); 
            $data['product_detail'] = json_encode($data['product_detail']);
            $data['product_basic_info'] = json_encode($data['product_basic_info']);
            $data['formular_info'] = json_encode($data['formular_info']); 
            $result = $this->worksheet_model->updateWorksheetDetail($data,$worksheet_id); 
            if ($result) {
                    $this->response($result, REST_Controller::HTTP_OK);
            } else {
                    $this->response("Can't update worksheet detail", REST_Controller::HTTP_NOT_FOUND);
            }
        } 
    }

    public function duplicateProductSample_get($id)
	{
		$result = $this->worksheet_model->duplicateProductSample($id);
		if ($result) {
			$this->response($result, REST_Controller::HTTP_OK);
		} else {
			$this->response("Found item not found", REST_Controller::HTTP_NOT_FOUND);
		}
	}
}
