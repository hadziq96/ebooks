<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}
	// login page
	public function index(){
		$this->status();
		$this->load->l_template('index');
	}
	
	// check user and password
	public function auth(){
		$this->status();
		$post=$this->input->post();
		$this->validation();
		if($this->form_validation->run()==false){
			// if user didnt input anything
			$this->session->set_flashdata('message', 'username must be filled');
			$this->session->set_flashdata('color','alert-danger');
			redirect('login');
		}else{
			// get input
			//$post=$this->session->flashdata('post');
			$post=$this->input->post();
			// get password in db
			$pass=$this->login_model->get_pass($post['username']);
		
			// condition if password not null/ user found
			if($pass!=null){
				// check password input with password in db
				if(password_verify($post['password'],$pass)){
					// login success
					$this->session->set_userdata('user',$post['username']);
					redirect('admin');
				}else{
					// callback if password input!=password in db
					$this->session->set_flashdata('message', 'password wrong');
					$this->session->set_flashdata('color','alert-danger');
					redirect('login');
				}
			}else{
				// callback if user not found
				$this->session->set_flashdata('message', 'user not found');
				$this->session->set_flashdata('color','alert-danger');
				redirect('login');
			}
		}
	}
	
	// logout function
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
	
	// another function
	// user status
	public function status(){
		// redirect if user is login
		$user=$this->session->userdata('user');
		if($user!=null){
			redirect('admin');
		}
	}
	
	// function for falidation, can use in function add and edit
	
	public function validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
	}
}