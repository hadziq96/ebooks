<?php
class Migration_Add_user extends CI_Migration{

	public function up(){
		// add columns
		$field=[
			'id'=>[
				'type'=>'text'
			],
			'name'=>[
				'type'=>'text'
			],
			'username'=>[
				'type'=>'text'
			],
			'password'=>[
				'type'=>'text'
			],
			'level'=>[
				'type'=>'INT',
				'constrain'=>11
			]
		];
		$this->dbforge->add_field($field);
		$this->dbforge->create_table('user');
		
		$data=[
			[
				'id'=>'user-001',
				'name'=>'Super admin',
				'username'=>'admin',
				'password'=>'$2y$10$JR3wisiVE5/qdNLaGRevf.jz11g6OqQQEEaQqRKyyUA1Zy3dU3NjC',
				'level'=>1
			]
		];
		$this->db->insert_batch('user',$data);
	}
	
	public function down(){
		$this->dbforge->drop_table('user');
	}
}