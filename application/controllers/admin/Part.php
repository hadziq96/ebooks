<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Part extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("part_model");
	}
	// display part of book
	public function index($id_book){
		// get part with id_book = $id_book on param
		$data["part"]=$this->part_model->get_part($id_book);
		$data["id_book"]=$id_book;
		// view all part of that book
		$this->load->a_template("part/index",$data);
	}
	// add a new part of a book
	public function add($id_book){
		$data["id_book"]=$id_book;
		// load validation
		$this->validation();
		if($this->form_validation->run()==false){
			// view add page for book with id_book = $id_book on parameter
			$this->load->a_template("part/add",$data);
		}else{
			// get data from $_POST
			$post=$this->input->post();
			// generate new id
			$post["id"]=$this->part_model->add_id();
			// add part to database
			$this->part_model->add($post);
			// create messege and redirect to index page
			$this->session->set_flashdata('color','alert-success');
			$this->session->set_flashdata('message','Part has been added');
			redirect(base_url('admin/book/part/'.$id_book));
		}
	}
	// edit a part
	public function edit($id){
		//load part with id=$id on parameter
		$data['part']=$this->part_model->get_part_by_id($id);
		// load function validation
		$this->validation();
		if($this->form_validation->run()==false){
			// view form edit that part
			$this->load->a_template("part/edit",$data);
		}else{
			// get data from $_POST
			$post=$this->input->post();
			// edit part on database
			$this->part_model->edit($post);
			// create message and redirect to index page
			$this->session->set_flashdata('color','alert-primary');
			$this->session->set_flashdata('message','Part has been edited');
			redirect(base_url('admin/book/part/'.$data['part']['id_book']));
		}
	}
	// delete part
	// confirm modal
	public function confirm($id){
		echo base_url('admin/part/delete/'.$id);
	}
	// delete from database
	public function delete($id){
		$data=$this->part_model->get_part_by_id($id);
		$this->part_model->delete($id);
		// create message and redirect to index page
		$this->session->set_flashdata('color','alert-danger');
		$this->session->set_flashdata('message','part has been deleted');
		redirect(base_url('admin/book/part/'.$data['id_book']));
	}
	
	// another function
	// function for falidation, can use in function add and edit
	public function validation(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("title","title","required");
	}
}