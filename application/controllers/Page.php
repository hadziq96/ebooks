<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Page extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("book_model");
	}
	
	// function called by ajax on guest.js
	// pagination book guest
	public function pagination(){
	
		$post=$this->input->post();
		// pagination
		$number_page=$post['page'];
		// i for index
		$limit=6; // 5 book/page
		$i=$number_page*$limit-$limit;
		// if number_page is not available, redirect to not found page
		$total_book=count($this->book_model->get_book());
		$total_page=ceil($total_book/$limit);
		if($number_page>$total_page){
			redirect("page/not_found");
		}
		// pagination
		$data=[
				"page_number"=>$number_page,
				"total_page"=>$total_page
			];
		$data["book"]=$this->book_model->pagination($limit,$i);
		$this->load->view("guest/book_list",$data);
	}
	
	// search book guest
	public function search(){
		$post=$this->input->post();
		// pagination
		$number_page=$post['page'];
		// form search input
		$search=$post['search'];
		// i for index
		$limit=6; // 5 book/page
		$i=$number_page*$limit-$limit;
		// if number_page is not available, redirect to not found page
		$total_book=count($this->book_model->get_book_searched($search));
		$total_page=ceil($total_book/$limit);
		if($number_page>$total_page){
			redirect("page/not_found");
		}
		// pagination
		$data=[
				"page_number"=>$number_page,
				"total_page"=>$total_page
				];
		$data["book"]=$this->book_model->search($limit,$i,$search);
		$this->load->view("guest/book_list",$data);
	}
	
	// page not found for ajax
	public function not_found(){
		$this->load->view("guest/not_found");
	}
}