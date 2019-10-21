<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->helper('cookie');
	$this->load->library('session');
}
	public function index()
	{
		// $this->load->view('view_form');
		$this->input->set_cookie('username','Suchaya','60');
		echo get_cookie('username');
		$this->session->set_userdata("member_id",45);
	}

	public function showcookie(){
		echo get_cookie('username');
	}

	

	public function showsession(){
		$member_id = $this->session->userdata("member_id");
		echo $member_id;
		$username = $this->session->userdata("username");
		echo br(5);
		echo $username;
		$email = $this->session->userdata("email");
		echo br(10);
		echo $email;

		$this->session->unset_userdata('member_id');
		$this->session->sess_destroy();
	}

	public function addcart(){
		$product = array(

			'id' => '001',
			'name' => 'java programing',
			'price' => 150.50,
			'qty' => 5
			
			);
			
			//insert to cart
			$this->cart->insert($product);
	}

	public function showcart(){
		$cart = $this->cart->contents();
		foreach($cart as $item){

		echo $item['rowid'];
		echo $item['id'];
		echo $item['name'];
		echo $item['price'];
		echo $item['qty'];

		}
	}

	public function updatecart(){
		$data = array(

			'rowid' => 'rowid',
			
			'price' => '200',
			
			
			);
			
			//update cart
			
			$this->cart->update($data);
	}
	
	public function deletecart(){
		$this->cart->destroy();
	}
}
