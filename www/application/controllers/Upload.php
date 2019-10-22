<?php
 
class Upload extends MY_Controller {
 
    // extends CI_Controller for CI 2.x users
 
    public $data    =   array();
 
    public function __construct() {
 
         parent::__construct();

         $this->load->helper(array('form'));

     
 
 
    }
 
    public function index() 
    {
        $this->load->view('upload');
    }

    public function do_upload()
    {
        //console($_FILES);
                date_default_timezone_set('Asia/Manila');
                $date = date('Y-m-d');

                $date = str_replace( ':', '', $date);
                if (!is_dir('doc/'.$date)) {
                    mkdir('./doc/' . $date, 0777, TRUE);

                }

                $config['upload_path']          = './doc/'.$date.'/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;


                $this->load->library('upload', $config);

                //console($this->upload);
                //console($_FILES['userfile']['name']);

                $temp_type = explode('.',$_FILES['userfile']['name']);
                $type = $temp_type[1];

                $temp_name = explode('.',$_FILES['userfile']['name']);
                $name = $temp_name[0];
                
                $name = 'ทดสอบ';
                $_FILES['userfile']['name'] = $name.'.'.$type;

                //console($_FILES['userfile']);

                
                if ( ! $this->upload->do_upload('userfile'))
                {
                        
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
                
                
    }
}