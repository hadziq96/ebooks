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
		$data['search']="null";
		// create string ebooks from base_url for change url ajax pagination
		$explode_base_url=explode('/',base_url());
		$data['change_url']=$explode_base_url[3];
		// load custom js
		$data['script']="pagination.js";
		// $data['book']=$this->book_model->get_book();
		$this->load->g_template("index",$data);
	}
	// load searched book
	public function search($search=null,$page=1){
		// redirect to normal pagination if input is null
		if($search==null){
			redirect("book/page");
		}
		$data['page']=$page;
		$data['search']=$search;
		// create string ebooks from base_url for change url ajax pagination
		$explode_base_url=explode('/',base_url());
		$data['change_url']=$explode_base_url[3];
		// load custom js pagination search
		$data['script']="search.js";
		// $data['book']=$this->book_model->get_book();
		$this->load->g_template("index",$data);
	}
	
	// display one book with all its parts
	public function book($id){
		$data['book']=$this->book_model->get_book_by_id($id);
		$data['part']=$this->part_model->get_part($id);
		if($data['book']==null){
			redirect("not_found");
		}
		$this->load->g_template("display_book",$data);
	}
	
	// display one part or aticle
	public function part($id){
		$data['part']=$this->part_model->get_part_by_id($id);
		if($data['part']==null){
			redirect('not_found');
		}
		$this->load->g_template("display_part",$data);
	}
	
	// page not found
	public function not_found(){
		$this->load->g_template('not_found');
	}
}