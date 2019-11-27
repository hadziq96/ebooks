<?php
class Login_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	// check user
	public function check_user($user_name){
		
	}
	// get password
	public function get_pass($user_name){
		$this->db->select('password');
		$query=$this->db->get_where('user',['username'=>$user_name]);
		$result=$query->row_array();
		return $result['password'];
	}
}