<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');


function console($data) {
	
	echo '<pre>';
	print_r($data);
	echo '</pre>';
	
}

function getDoctypeName($id)
{
    $CI = get_instance();
	$CI->load->model('document_model');
	$temp = $CI->document_model->getDoctypeName($id);
	return $temp[0]['name'];
}

function getDepartmentName($id)
{
    $CI = get_instance();
	$CI->load->model('document_model');
	$temp = $CI->document_model->getDepartmentName($id);
	return $temp[0]['name'];
}

function check_empty($data)
{
	if(isset($data)&&!empty($data))
	{
		$result = $data;
	}
	else if($data == 0) $result = 0; else $result = NULL;
	return $result;
}

function upload_pic($temp_file,$file_name,$temp_folder)
{
				date_default_timezone_set('Asia/Bangkok');
                $year = date('Y');
                $month = date('m');
                $day = date('d');

                if (!is_dir('./'.$temp_folder.'/'.$year.'/'.$month.'/'.$day)) {
                    mkdir('./'.$temp_folder.'/'.$year.'/'.$month.'/'.$day, 0777, TRUE);
                }

                $config['upload_path']          = './'.$temp_folder.'/'.$year.'/'.$month.'/'.$day.'/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                
                $CI =& get_instance();
     			$CI->load->library('upload', $config);
                
                $temp_type = explode('.',$temp_file[$file_name]['name']);
                $type = $temp_type[1];

                $name = $year.$month.$day.date('hms');
                
                $temp_file[$file_name]['name'] = $name.'.'.$type;

                $a = $file_name;
                if ( ! $CI->upload->do_upload($a))
                {
                        $thumbnail = NULL;
                }
                else
                {
						$thumbnail = $temp_folder.'/'.$year.'/'.$month.'/'.$day.'/'.$temp_file[$file_name]['name'];
                        
				}
		        return $thumbnail;	
}

function upload_cover($temp_file,$file_name,$temp_folder)
{
				date_default_timezone_set('Asia/Bangkok');
                $date = date('Y-m-d');

                $date = str_replace( ':', '', $date);
                if (!is_dir('./'.$temp_folder.'/'.$date)) {
                    mkdir('./'.$temp_folder.'/'.$date, 0777, TRUE);

                }

                $config['upload_path']          = './'.$temp_folder.'/'.$date.'/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                /*
                $config['max_size']             = 5000000;
                $config['max_width']            = 2048;
                $config['max_height']           = 1536;
                */
				$CI =& get_instance();
     			$CI->load->library('upload', $config);
                
                //console($this->upload);
                //console($_FILES['userfile']['name']);

                $temp_type = explode('.',$temp_file[$file_name]['name']);
                $type = $temp_type[1];

                $temp_name = explode('.',$temp_file[$file_name]['name']);
                $name = $temp_name[0];
                
                //$name = 'ทดสอบ';
                $temp_file[$file_name]['name'] = $name.'.'.$type;

                //console($_FILES['userfile']);

                $a = $file_name;
                if ( ! $CI->upload->do_upload($a))
                {
                        $thumbnail = NULL;
                }
                else
                {
						$thumbnail = $temp_folder.'/'.$date.'/'.$temp_file[$file_name]['name'];
                        
				}
		return $thumbnail;	
}

function upload_gallery($temp_file,$file_name,$temp_folder)
{
				date_default_timezone_set('Asia/Bangkok');
                $date = date('Y-m-d');

                $date = str_replace( ':', '', $date);
                if (!is_dir('./'.$temp_folder.'/'.$date)) {
                    mkdir('./'.$temp_folder.'/'.$date, 0777, TRUE);

                }

                $config['upload_path']          = './'.$temp_folder.'/'.$date.'/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                /*
                $config['max_size']             = 5000000;
                $config['max_width']            = 2048;
                $config['max_height']           = 1536;
                */

				$CI =& get_instance();
     			$CI->load->library('upload', $config);
                
                //console($this->upload);
                //console($_FILES['userfile']['name']);
                foreach($_FILES['gallery']['tmp_name'] as $key => $val)
                {
                    $file_name = $_FILES['gallery']['name'][$key];
                    $file_size =$_FILES['gallery']['size'][$key];
                    $file_tmp =$_FILES['gallery']['tmp_name'][$key];
                    $file_type=$_FILES['gallery']['type'][$key]; 

                    $temp_type = explode('.',$file_name);
                    $type = $temp_type[1];

                    $temp_name = explode('.',$file_name);
                    $name = $temp_name[0];
                    
                    //$name = 'ทดสอบ';
                    $temp_file[$file_name]['name'] = $name.'.'.$type;

                    echo $temp_file[$file_name]['name'];

                    $a = $file_name;
                    if ( ! $CI->upload->do_upload($a))
                    {
                        echo "no";
                            $thumbnail = NULL;
                    }
                    else
                    {
                        echo "in";
                            $thumbnail = $temp_folder.'/'.$date.'/'.$temp_file[$file_name]['name'];
                    }
                    $temp_thumbnail[] = $thumbnail;
                }
                
		return $temp_thumbnail;	
}

function upload_doc($temp_file,$file_name,$temp_folder)
{
				date_default_timezone_set('Asia/Bangkok');
                $date = date('Y-m-d');

                $date = str_replace( ':', '', $date);
                if (!is_dir('./'.$temp_folder.'/'.$date)) {
                    mkdir('./'.$temp_folder.'/'.$date, 0777, TRUE);

                }

                $config['upload_path']          = './'.$temp_folder.'/'.$date.'/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
                $config['max_size']             = 500000;
                $config['max_width']            = 2048;
                $config['max_height']           = 1536;

				$CI =& get_instance();
     			$CI->load->library('upload', $config);
                
                //console($this->upload);
                //console($_FILES['userfile']['name']);

                $temp_type = explode('.',$temp_file[$file_name]['name']);
                $type = $temp_type[1];

                $temp_name = explode('.',$temp_file[$file_name]['name']);
                $name = $temp_name[0];
                
                //$name = 'ทดสอบ';
                $temp_file[$file_name]['name'] = $name.'.'.$type;

                //console($_FILES['userfile']);

                $a = $file_name;
                if ( ! $CI->upload->do_upload($a))
                {
                        $thumbnail = NULL;
                }
                else
                {
						$thumbnail = $temp_folder.'/'.$date.'/'.$temp_file[$file_name]['name'];
                        
				}
		return $thumbnail;	
}
?>