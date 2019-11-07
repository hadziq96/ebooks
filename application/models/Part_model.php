<?php
class Part_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	// function display part
	// display all part
	public function get_part($id){
		$this->db->order_by('id');
		$query=$this->db->get_where('part',['id_book'=>$id]);
		return $query->result_array();
	}
	// display a part by id
	// use in edit function in part controller and part function in guest controller
	public function get_part_by_id($id){
		$query=$this->db->get_where('part',['id'=>$id]);
		return $query->row_array();
	}
	
	// function add part
	// add id for new part
	public function add_id(){
		// condition if book is null
		$condition=$this->db->get("part");
		if($condition->num_rows()==0){
			return "part-00001";
			die();
		}
		//get last id
		$this->db->select("id");
		$this->db->limit(1);
		$this->db->order_by("id","DESC");
		$query=$this->db->get("part");
		$last_id=$query->row_array();
		//last id+1
		$sum_element=explode("-",$last_id['id']);
		$sum=$sum_element[1]+1;
		//add 000
		while(strlen($sum)<5){
		$sum="0".$sum;
		}
		//implode sum with sum element and create new id
		$new_id=implode("-",[$sum_element[0],$sum]);
		return $new_id;
	}
	// add part to database
	public function add($data){
		return $this->db->insert('part',$data);
	}
	// end of add function
	
	// function edit part
	// edit part with $data on parameter
	public function edit($data){
		$this->db->where('id', $data['id']);
		return $this->db->update('part', $data);
	}
	// end of edit function
	
	// delete function
	public function delete($id){
		return $this->db->delete('part',['id'=>$id]);
	}
}