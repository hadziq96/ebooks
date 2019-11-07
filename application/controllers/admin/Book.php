<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("book_model");
	}
	// display all book
	public function index(){
		// load book from database
		$data["book"]=$this->book_model->get_book();
		// view index page
		$this->load->a_template("book/index",$data);
	}
	// add a new book
	public function add(){
		// load validation
		$this->validation();
		if($this->form_validation->run()==false){
			// view add book page
			$this->load->a_template("book/add");
		}else{
			// get data from $_POST
			$post=$this->input->post();
			// function generate new id for book
			$post["id"]=$this->book_model->add_id();
			// add book to database
			$this->book_model->add($post);
			// create message and redirect to index page
			$this->session->set_flashdata('color','alert-success');
			$this->session->set_flashdata('message','Book has been added');
			redirect(base_url('admin/book'));
		}
	}
	// edit the book
	public function edit($id=null){
		// get book with id= $id on parameter
		$data["book"]=$this->book_model->get_book_by_id($id);
		// load validation
		$this->validation();
		if($this->form_validation->run()==false){
			// view edit book page
			$this->load->a_template("book/edit", $data);
		}else{
			// get data from $_POST
			$post=$this->input->post();
			// update book
			$this->book_model->edit($post);
			// create message and redirect to index page
			$this->session->set_flashdata('color','alert-primary');
			$this->session->set_flashdata('message','Book has been edited');
			redirect(base_url('admin/book'));
		}
	}
	// delete book
	// confirm modal
	public function confirm($id){
		echo base_url('admin/book/delete/'.$id);
	}
	// delete from database
	public function delete($id){
		$this->book_model->delete($id);
		// create message and redirect to index page
		$this->session->set_flashdata('color','alert-danger');
		$this->session->set_flashdata('message','Book has been deleted');
		redirect(base_url('admin/book'));
	}
	
	// another function
	// function for falidation, can use in function add and edit
	public function validation(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("title","title","required");
	}
}