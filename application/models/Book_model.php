<?php
class Book_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	// function index, get all book from database
	public function get_book(){
		$this->db->order_by('id');
		$query=$this->db->get("book");
		return $query->result_array();
	}
	// display a book by id
	// use in edit function in book controller and book function in guest controller
	public function get_book_by_id($id){
		$query=$this->db->get_where("book",["id"=>$id]);
		return $query->row_array();
	}
	
	// function add
	// function for generate id for new book
	public function add_id(){
		// condition if book is null
		$condition=$this->db->get("book");
		if($condition->num_rows()==0){
			return "book-00001";
			die();
		}
		// get last id
		$this->db->select("id");
		$this->db->limit(1);
		$this->db->order_by("id","DESC");
		$query=$this->db->get("book");
		$last_id=$query->row_array();
		// last id+1
		$sum_element=explode("-",$last_id["id"]);
		$sum=$sum_element[1]+1;
		// add 000
		while(strlen($sum)<5){
			$sum="0".$sum;
		}
		// implode sum with sum element and create new id
		$new_id=implode("-",[$sum_element[0],$sum]);
		return $new_id;
	}
	// add a new book to database
	public function add($data){
		return $this->db->insert("book",$data);
	}
	// end of add function
	
	// function edit book
	// edit book with $data on parameter
	public function edit($data){
		$this->db->where('id', $data['id']);
		return $this->db->update('book', $data);
	}
	// end of edit function
	
	// delete function
	public function delete($id){
		$this->db->delete('book',['id'=>$id]);
		$this->db->delete('part',['id_book'=>$id]);
	}
}