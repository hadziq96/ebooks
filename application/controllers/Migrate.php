<?php
class Migrate extends CI_Controller{
	
	public function index(){
		$this->load->library('migration');
		$data=$this->migration->find_migrations();
		foreach($data as $key=>$value){
			$this->migration->version($key);
		}
		echo 'migration success, back to <a href="'.base_url().'">home</a>';
	}

}