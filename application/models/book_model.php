<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model {
   private $table ='books';

        public function __construct()
        {
            $this->load->database();
        }

	public function book_insert($b_name,$b_author,$b_year,$type_id,$b_amount,$b_price)
	{
		$this->db->query("insert into books (b_name,b_author,b_year,type_id,b_amount,b_price) values ('$b_name','$b_author','$b_year','$type_id','$b_amount','$b_price')");
    }

    public function book_type_insert($type_name)
	{
		$this->db->query("insert into type (type_name) values ('$type_name')");
    }
//////////////////////////////////แสดงผล//////////////////
    public function get_items()
    {
        
        return $this->db->get('books')->result(); 
        ////('') ต้องเป็นชื่อตาราง จากนั้นใส่ result เพื่อแสดงค่าทั้งหมด
    }

    public function create_item($value){
        $this->db->insert('books', $value);
    }
    
    
}
