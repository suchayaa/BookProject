<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_items()
    {
        
        return $this->db->get('books')->result(); 
        
        
        ////$this->$table ต้องเป็นชื่อตาราง แต่เนื่องจากเราสร้างตัวแปล $table เก็บค่าแล้ว จากนั้นใส่ result เพื่อแสดงค่าทั้งหมด
    }

    // public function get_items2()
    // {
        
    //     return $this->db->get('type')->result(); 
    //     ////$this->$table ต้องเป็นชื่อตาราง แต่เนื่องจากเราสร้างตัวแปล $table เก็บค่าแล้ว จากนั้นใส่ result เพื่อแสดงค่าทั้งหมด
    // }

    public function create_item($value){
        $this->db->insert('books', $value);
    }


	public function book_insert($b_name,$b_author,$b_year,$type_id,$b_amount,$b_price)
	{
		$this->db->query("insert into books (b_name,b_author,b_year,type_id,b_amount,b_price) values ('$b_name','$b_author','$b_year','$type_id','$b_amount','$b_price')");
    }

    public function book_type_insert($type_name)
	{
		$this->db->query("insert into type (type_name) values ('$type_name')");
    }
    

    public function delete_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('books');  //ชื่อตาราง
    }	

    
   
}
