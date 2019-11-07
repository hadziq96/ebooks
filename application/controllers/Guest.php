<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Guest extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('book_model');
		$this->load->model('part_model');
	}
	public function index(){
		$data['book']=$this->book_model->get_book();
		$this->load->g_template("index",$data);
	}
	public function book($id){
		$data['book']=$this->book_model->get_book_by_id($id);
		$data['part']=$this->part_model->get_part($id);
		$this->load->g_template("display_book",$data);
	}
	public function part($id){
		$data['part']=$this->part_model->get_part_by_id($id);
		$this->load->g_template("display_part",$data);
	}
}