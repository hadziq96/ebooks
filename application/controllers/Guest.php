<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Guest extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('book_model');
		$this->load->model('part_model');
	}
	// load all book with pagination
	public function index($page=1){
		$data['page']=$page;
		// create string ebooks from base_url for change url ajax pagination
		$explode_base_url=explode('/',base_url());
		$data['base_url']=$explode_base_url[3];
		// $data['book']=$this->book_model->get_book();
		$this->load->g_template("index",$data);
	}
	// load searched book
	public function search($like=null,$page=1){
		var_dump([$like,$page]);
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