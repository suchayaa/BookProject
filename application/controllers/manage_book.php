<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_book extends CI_Controller {

        function __construct(){
                parent::__construct();
                $this->load->model('book_model');
            }

	public function index()
	{
                $this->load->view('view_form');
                
        }

        public function show()
	{
		// $this->load->model('book_model'); //มาจาก book_model.php
		//$this->save_item();
		// $this->load->view('view_form', [ ////แสดงผลเป็น array ก่อน
		// 	'items' => $this->books_model->get_items()
                // ]);
                $data['items'] = $this->book_model->get_items();
                $this->load->view('view_form',$data);

                
        }
        
        // public function show2()
	// {
        //         $data2['items2'] = $this->book_model->get_items2();
        //         $this->load->view('view_form',$data2);
	// }

	// private function save_item()
	// {
	// 	$input = $this->input->post();
	// 	if(!empty($input)){
	// 		$this->book_model->create_item($input);

	// 		redirect(base_url('/'));
	// 	}
        // }
        
        public function fordelete(){
                
                $id=$this->input->get('bookid');
                $this->book_model->delete_id($id);
                $this->load->view('./manage_book/show');
	}
    
    public function data_submit()
	{
        $b_name = $this->input->post('bName');
        $b_author = $this->input->post('bAuthor');
        $b_year = $this->input->post('bYear');
        $type_id = $this->input->post('btn');
        $b_amount = $this->input->post('bAmount');
        $b_price = $this->input->post('bPrice');
        echo $b_name; 
        echo "<br/>";
        echo $b_author;
        echo "<br/>";
        echo $b_year;
        echo "<br/>";
        echo $type_id;
        echo "<br/>";
        echo $b_amount;
        echo "<br/>";
        echo $b_price;

        $this->book_model->book_insert($b_name,$b_author,$b_year,$type_id,$b_amount,$b_price);
        }
        
        public function data_type_submit()
	{
        $type_name = $this->input->post('type_name');
       
        echo $type_name; 

        $this->book_model->book_type_insert($type_name);
	}
}
