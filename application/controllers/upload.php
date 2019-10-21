<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class upload extends CI_Controller {

public function __construct(){
	parent::__construct();
	}
public function index(){
	echo "Hello";
	$this->load->view('uploadform');
}

public function do_upload()

{

$config['upload_path'] = './uploads/';

$config['allowed_types'] = 'gif|jpg|png';

$config['max_size'] = 100;

$config['max_width'] = 1024;

$config['max_height'] = 768;

$this->load->library('upload', $config);

if ( ! $this->upload->do_upload('userfile'))

{

$error = array('error' => $this->upload->display_errors());

$this->load->view('uploadform', $error);

}

else

{

$data = array('upload_data' => $this->upload->data());

$this->load->view('upload_success', $data);

}

}
}
