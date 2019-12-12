<?php

class My_loader extends CI_Loader {
	public function a_template($page,$data=null){
		$this->view("admin/header",$data);
		$this->view("admin/".$page,$data);
		$this->view("admin/footer",$data);
	}
	public function g_template($page,$data=null){
		$this->view("guest/header",$data);
		$this->view("guest/".$page,$data);
		$this->view("guest/footer",$data);
	}
	// logint template
	public function l_template($page,$data=null){
		$this->view("login/header",$data);
		$this->view("login/".$page,$data);
		$this->view("login/footer",$data);
	}
}