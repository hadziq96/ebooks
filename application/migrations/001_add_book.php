<?php

class Migration_Add_book extends CI_Migration{
	
	public function up(){
		$field=[
			'id'=>[
				'type'=>'text'
			],
			'title'=>[
				'type'=>'text'
			],
			'description'=>[
				'type'=>'text'
			]
		];
		
		$this->dbforge->add_field($field);
		$this->dbforge->create_table('book');
		
		$data=[
			[
				'id'=>'book-00001',
				'title'=>'Cara penggunaan aplikasi (ebooks)',
				'description'=>'Dokumentasi dari aplikasi ini. Meliputi cara penggunaan aplikasi.'
			]
		];
		$this->db->insert_batch('book',$data);
	}
	
	public function down(){
		$this->dbforge->drop_table('book');
	}

}